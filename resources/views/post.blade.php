@extends('layouts.beranda')

@section('container')
<h3>Post Focus</h3>
<article>

    <h5>{{ $body["author"] }}</h5>
    <p>{{ $body["body"] }}</p>
    <a href="/tahun">Kembali</a>
  </article>   
@endsection