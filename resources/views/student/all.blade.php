@extends('layout.main')

@section('content')
 <h1>Ini adalah halaman STUDENT</h1>
 <a href="/student/create"><button type="button" class="btn btn-primary">new data</button></a> 

 @if (session()->has('success'))
 <div class="alert alert-success" role="alert">
   {{ session('success') }}
 </div>
@endif


 <table class="table">
    <thead>
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($students as $key => $item)
        <th scope="row">{{$key + 1 }}</th>
            <td>{{$item->nis}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->kelas-> nama ?? "kelas not found"}}</td>
            <td>
                <a href= "/student/detail/{{$item->id}}" type="button" class="btn btn-light" >Detail</a>
                <a href="/student/edit/{{$item->id}}"><button type="button" class="btn btn-warning" >Edit</button></a>
                <form method="POST" action="/student/delete/{{$item->id}}">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
              </td>
        </tr>
        @endforeach
            
    </tbody>
</table>

@endsection