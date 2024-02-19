<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;

class DashboardStudentController extends Controller
{
    public static function index(Request $request) {
        $title = "student";
        $perPage = 10; 
    

        $search = $request->input('search');
    

        $query = Student::query();

        if (!empty($search)) {
            $query->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('nis', 'like', '%' . $search . '%');
        }
    

        $students = $query->paginate($perPage);
    

        return view('dashboard.dashboard', compact('title', 'students', 'search'));
    }

    public function create(){
        return view('student.create', [
            "title" => "create-new-data",
            "kelas" => kelas::all()
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nis'   => 'required|max:255',
            'nama'  => 'required|max:255',
            'asal'  => 'required',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $result = Student::create($validateData);
        if ($result) {
            return redirect('/student/all')->with('success', 'Data siswa berhasil ditambahkan!');
        }
    }

    public function destroy ($id){
    
        $result = Student::destroy($id);

        return redirect('/student/all')->with('success', 'Data siswa berhasil dihapus!');

    }

    public function edit (Student $student){
        return view('student.edit', [
            "title" => "edit-data",
            "student" => $student,
            "kelas" => kelas::all()
        ]);
    }

    public function update(Request $request, Student $student){
        $validateData = $request->validate([
            'nis'   => 'required|max:255',
            'nama'  => 'required|max:255',
            'asal'  => 'required',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $result = Student::where('id', $student -> id)-> update($validateData);
        if ($result) {
            return redirect('/student/all')->with('success', 'Data siswa berhasil diedit!');
        }

        
    }

    public function show (Student $student){
        return view('student.detail', [
            "title" => "detail",
            "student" => $student
        ]);
    }
}
