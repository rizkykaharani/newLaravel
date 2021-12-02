{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
    <h1>{{$title}}</h1>

    <a href="/create" class="btn btn-primary mb-3">Create</a>

    @foreach ($post as $isi)
        <h2>
        <a href="http:/home/{{ $isi->slug}}" class="text-decoration-none"> {{ $isi->title}}</a>
        </h2>
        <p>by <a href="/">{{ $isi->user->name }}</a> in <a href="/categories/{{$isi->category->slug }}" class="text-decoration-none">{{$isi->category->name}}</a></p>
        <h5>{{ $isi->excerpt }}</h5>
    @endforeach

@endsection