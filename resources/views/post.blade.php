@extends('layouts.beranda')

@section('container')
<h3>Single</h3>
<article>


    <h5>{{ $siaran->excerpt }}</h5>
    {!! $siaran->body !!}
  </article>   
@endsection