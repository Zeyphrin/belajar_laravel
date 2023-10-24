@extends('layout.main')

@section('content')
<h1>Extracurricular</h1>

<table class="table">
  <thead>
      <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Nama</th>
          <th scope="col">Nama Pembina</th>
          <th scope="col">Deskripsi</th>
      </tr>
  </thead>
  <tbody>
      <tr>
      @foreach ($extracurricular as $key => $item)
      <th scope="row">{{$key + 1 }}</th>
          <td>{{$item['nama']}}</td>
          <td>{{$item['pembina']}}</td>
          <td>{{$item['deskripsi']}}</td>
      </tr>
      @endforeach
          
  </tbody>
</table>
@endsection