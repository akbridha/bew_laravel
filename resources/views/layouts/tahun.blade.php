
@extends('layouts.beranda')
@section('container')
      
  
  <H2 mb-7>Tahunan Post </H2>

  @foreach ($post as $post)

<article>
  <h2> <a href="/single_post/{{ $post["slug"] }}"> {{ $post["title"] }}</a></h2>
  <h5>{{ $post["author"] }}</h5>
  <p>{{ $post["body"] }}</p>
</article>
      
  @endforeach

 @endsection


