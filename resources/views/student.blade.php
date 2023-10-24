@extends('layout.main')

@section('content')
  <h1>Ini adalah halaman STUDENT</h1>

  <table class="table">
    <thead>
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Asal</th>
            <th scope="col">Gender</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($students as $key => $item)
        <th scope="row">{{$key + 1 }}</th>
            <td>{{$item['nis']}}</td>
            <td>{{$item['nama']}}</td>
            <td>{{$item['asal']}}</td>
            <td>{{$item['gender']}}</td>
        </tr>
        @endforeach
            
    </tbody>
</table>
@endsection