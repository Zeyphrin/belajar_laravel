@extends('layout.main')

@section('content')
    <h1>Edit data kelas</h1>
    <form action="/kelas/update/{{ $kelas->id }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama" value="{{ old ('nama',  $kelas->nama) }}"> 
      </div>
      <button type="submit" class="btn btn-primary">Edit data</button>
    </form>
      
@endsection