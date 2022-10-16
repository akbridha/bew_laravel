
@extends('layouts.beranda')
@section('container')
      
  
  <H2 mb-7>Siaran {{$title}} </H2>


  @foreach ($siaran as $siaran)


<article>
  <h2> <a href='/single_post/{{ $siaran->slug}}'class='text-decoration-none'> {{ $siaran['title'] }}</a></h2>
  <h5>{{ $siaran->author}}</h5>
  <p>{{ $siaran->excerpt}}</p>
  <h6>{{var_dump($siaran)}}</h6>
</article>
      
  @endforeach

 @endsection


