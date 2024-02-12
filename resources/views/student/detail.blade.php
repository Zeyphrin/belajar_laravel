@extends('layout.main')

@section('content')
    <h1>Detail data student</h1>
    <form>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">NIS</label>
        <input disabled type="text" class="form-control" id="formGroupExampleInput" name="nis" value="{{ old ('nis', $student->nis) }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama</label>
        <input disabled type="text" class="form-control" id="formGroupExampleInput2" name="nama" value="{{ old ('nama',  $student->nama) }}"> 
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Asal Kota</label>
        <input disabled type="text" class="form-control" id="formGroupExampleInput2" name="asal" value="{{ old ('asal',  $student->asal) }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Kelas</label>
        <input disabled type="text" class="form-control" id="formGroupExampleInput2" name="kelas" value="{{ old ('kelas',  $student->kelas->nama) }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
        <input disabled type="date" class="form-control" id="formGroupExampleInput2" name="tgl_lahir" value="{{ old ('tgl_lahir',  $student->tgl_lahir) }}">
      </div>
      <a type="button" class="btn btn-primary" href="/student/all">Back</a>
    </form>
      
@endsection