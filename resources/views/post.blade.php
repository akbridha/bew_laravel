@extends('layouts.beranda')

@section('container')
<!-- <h6>{{var_dump($siaran)}}</h6> -->


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card md-6">
        <div class="card-header">
        Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $siaran->title }}</h5>
          <p class="card-text">{{ $siaran->excerpt }}.</p>
          By {{$siaran->user->name}}  in <a href = '/Kategori/{{$siaran->kategori->slug}}'class='text-decoration-none'>{{$siaran->kategori->name}}</a>
           <div class="row mb-10">
             <div class="col">
              <a href="/authors/{{$siaran->user->id}}" class="btn btn-primary">Lihat semua Postingan {{$siaran->user->name}} </a>
             </div>
             <div class="col "></div>
           </div>
          <div class="row"></div>
       </div>
      </div>
      <div class="container mx-6">

        <img src="https:\\source.unsplash.com\800x300?{{ $siaran->kategori}} " class="img-fluid my-6" alt="{{ $siaran->kategori}}">
      </div>
    
       {!! $siaran->body !!}

    </div>
  </div>
</div>




@endsection