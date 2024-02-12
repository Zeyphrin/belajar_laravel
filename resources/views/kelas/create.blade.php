@extends('layout.main')

@section('content')
    <h1>New data kelas</h1>
    <form action="/kelas/add" method="POST">
        @csrf
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama" value="{{ old ('nama') }}"> 
      </div>
      <button type="submit" class="btn btn-primary">Add data</button>
    </form>
      
@endsection