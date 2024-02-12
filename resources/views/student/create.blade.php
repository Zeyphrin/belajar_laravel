@extends('layout.main')

@section('content')
    <h1>New data student</h1>
    <form action="/student/add" method="POST">
        @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">NIS</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="nis" value="{{ old ('nis') }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama" value="{{ old ('nama') }}"> 
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Asal Kota</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="asal" value="{{ old ('asal') }}">
      </div>
      <div class="mb-3">
        <label for="kelas_id" class="form-label">Kelas</label>
        <select class="form-select" id="kelas_id" name="kelas_id"  required>
            @foreach ($kelas as $class)
                <option value="{{ $class->id }}">{{$class->nama}}</option>
            @endforeach
        </select>
    </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="formGroupExampleInput2" name="tgl_lahir" value="{{ old ('tgl_lahir') }}">
      </div>
      <button type="submit" class="btn btn-primary">Add data</button>
    </form>
      
@endsection