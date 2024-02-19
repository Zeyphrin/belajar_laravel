@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>
</div>

<a href="/student/create" class="row mb-3 col-md-1"><button type="button" class="btn btn-primary">new data</button></a> 


@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="row mb-3">
  <div class="col-md-6">
      <form action="/dashboard/student" method="GET">
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ $search ?? '' }}">
              <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
      </form>
  </div>
</div>


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

<div class="d-flex justify-content-center mt-4">
  {{ $students->links('pagination::bootstrap-4') }}
</div>
@endsection