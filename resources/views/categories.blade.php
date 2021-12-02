@extends('layouts.main')

@section('container')
    <h2>Halaman Categories</h2>

    @foreach ($categories as $category)
    <ul>
        <li><a href="http:/categories/{{ $category->slug}}"> {{ $category->name}}</a></li>
    </ul>
    @endforeach

@endsection