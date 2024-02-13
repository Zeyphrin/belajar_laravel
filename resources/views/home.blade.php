@extends('layout.main')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

@section('content')
  <h1>Ini adalah halaman HOME</h1>

@endsection