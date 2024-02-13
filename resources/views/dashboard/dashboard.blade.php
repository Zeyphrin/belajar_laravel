@extends('layout.main')

@section('content')
  <h1>selamat datang  {{ auth()->user()->name }}</h1>

@endsection