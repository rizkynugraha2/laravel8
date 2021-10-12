@extends('layouts.main')


@section('penampung')
    <h1 class="mb-5">Halaman About</h1>
    <h3>{{ $name; }}</h3>
    <p>{{ $email; }}</p>
    <img src="pic/{{ $image }}" alt="{{ $name }}" width="290px" class="img-thumbnail rounded-circle">
@endsection
