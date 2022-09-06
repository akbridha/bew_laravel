@extends('layouts.beranda')

@section('container')
<h3>Detail Pos</h3>
<article>

    <h5>{{ $body["author"] }}</h5>
    <p>{{ $body["body"] }}</p>
  </article>   
@endsection