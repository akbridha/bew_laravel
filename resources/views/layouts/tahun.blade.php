
@extends('layouts.beranda')
@section('container')
      
  
  <H2 mb-7>Tahunan Post </H2>


  @foreach ($siaran as $siaran)


<article class = 'mb-5 border-bottom'>
  <h2> <a href='/single_post/{{ $siaran->slug}}'class='text-decoration-none'> {{ $siaran['title'] }}</a></h2>
  <p>By. Satria in <a href = '/Kategori/{{$siaran->kategori->slug}}'class='text-decoration-none'>{{$siaran->kategori->name}}</a>


  <h5>{{ $siaran->author}}</h5>
  <p>{{ $siaran->excerpt}}</p>
  <a href='/single_post/{{ $siaran->slug}}'class='text-decoration-none'> Read More...</a>
</article>
      
  @endforeach

 @endsection


