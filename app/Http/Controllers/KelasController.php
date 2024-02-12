<?php

namespace App\Http\Controllers;

use App\Models\Kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public static function index() {
        return view ('kelas/all', 
        ["title" => "kelas",
          "kelas" => Kelas::all()]);
    }


    public function create(){
        return view('kelas.create', [
            "title" => "create-new-data",
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama'  => 'required|max:255',
        ]);

        $result = Kelas::create($validateData);
        if ($result) {
            return redirect('/kelas/all')->with('success', 'Data siswa berhasil ditambahkan!');
        }
    }

    public function destroy ($id){
    
        $result = Kelas::destroy($id);

        return redirect('/kelas/all')->with('success', 'Data siswa berhasil dihapus!');

    }

    public function edit (Kelas $kelas){
        return view('kelas.edit', [
            "title" => "edit-data",
            "kelas" => $kelas
        ]);
    }

    public function update(Request $request, Kelas $kelas){
        $validateData = $request->validate([
            'nama'  => 'required|max:255',
        ]);

        $result = Kelas::where('id', $kelas -> id)-> update($validateData);
        if ($result) {
            return redirect('/kelas/all')->with('success', 'Data siswa berhasil diedit!');
        }

        
    }

    public function show (Kelas $kelas){
        return view('kelas.detail', [
            "title" => "detail",
            "kelas" => $kelas
        ]);
    }
}
