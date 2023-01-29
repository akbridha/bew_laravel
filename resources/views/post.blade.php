@extends('layouts.beranda')

@section('container')
<!-- <h6>{{var_dump($siaran)}}</h6> -->
<h3>Single post detail</h3>
<article>

  <h5> By <a href="/authors/{{$siaran->user->id}}">{{$siaran->user->name}}</a> in <a href = '/Kategori/{{$siaran->kategori->slug}}'class='text-decoration-none'>{{$siaran->kategori->name}}</a>
    
    </h5>

    <h3> {{ $siaran->excerpt }}</h3>

    {!! $siaran->body !!}
  </article>   


@endsection