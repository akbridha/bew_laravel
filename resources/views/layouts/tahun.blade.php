
@extends('layouts.beranda')
@section('container')
      
  
  <H2 mb-7>Tahunan Post </H2>


  @foreach ($siaran as $siaran)


<article>
  <h2> <a href='/single_post/{{ $siaran->slug}}'> {{ $siaran['title'] }}</a></h2>
  <h5>{{ $siaran->author}}</h5>
  <p>{{ $siaran->excerpt}}</p>
</article>
      
  @endforeach

 @endsection


