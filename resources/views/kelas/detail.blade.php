@extends('layout.main')

@section('content')
    <h1>Detail data student</h1>
    <form>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">unique id (based on db)</label>
        <input disabled type="text" class="form-control" id="formGroupExampleInput" name="id" value="{{ old ('id', $kelas->id) }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama</label>
        <input disabled type="text" class="form-control" id="formGroupExampleInput2" name="nama" value="{{ old ('nama',  $kelas->nama) }}"> 
      </div>
      <a type="button" class="btn btn-primary" href="/student/all">Back</a>
    </form>
      
@endsection