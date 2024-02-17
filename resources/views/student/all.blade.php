@extends('layout.main')

@section('content')
 <h1>Ini adalah halaman STUDENT</h1>

 @if (session()->has('success'))
 <div class="alert alert-success" role="alert">
   {{ session('success') }}
 </div>
@endif

<div class="row mb-3">
    <div class="col-md-6">
        <form action="/student/all" method="GET">
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
        @foreach ($students as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->nis }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kelas ? $item->kelas->nama : "kelas not found" }}</td>
            <td>
                <a href="/student/detail/{{ $item->id }}" type="button" class="btn btn-light">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Tampilkan Link Paginasi -->

<div class="d-flex justify-content-center mt-4">
    {{ $students->links('pagination::bootstrap-4') }}
</div>

@endsection
