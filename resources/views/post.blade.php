{{-- @dd($isi) --}}

@extends ('layouts.main')

@section('container')

    <h1>{{ $isi->title }}</h1>
    <p>by <a href="/">{{$isi->user->name }}</a> in <a href="/categories/{{$isi->category->slug }}">{{$isi->category->name}}</a></p>
    {{-- tidak melakukan escaping --}}
    {!! $isi->isi !!}

@endsection
