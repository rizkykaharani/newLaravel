@extends('layouts.main')

@section('container')
    <h1>Halaman Category: {{ $category }} </h1>

    @foreach ($posts as $isi)
        <h2>
        <a href="http:/home/{{ $isi->slug}}"> {{ $isi->title}}</a>
        </h2>
        <h5>{{ $isi->excerpt }}</h5>
    @endforeach

@endsection