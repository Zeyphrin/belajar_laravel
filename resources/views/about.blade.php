@extends('layout.main')

@section('content')
  <h1>Ini adalah halaman ABOUT</h1>
  <h1><?= $name; ?></h1>
  <h2><?= $email; ?></h2>
  <h2><?= $kelas; ?></h2>
  <img src="<?= $image; ?>" alt="<?= $name; ?>" width= "200"> 
@endsection 