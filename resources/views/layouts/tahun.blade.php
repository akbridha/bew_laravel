
@extends('layouts.beranda')
@section('container')
      
<!-- <H2 mb-7>tes var dump {{$siaran}} </H2> -->
  
  <H2 mb-7>{{ $title }} </H2>


  @if ($siaran->count())

   <h1> Array tersedia</h1>
   <div class= "card mb-3">
    <img src="https:\\source.unsplash.com\800x300\?{{ $siaran[0]->kategori}} " class="card-img-top" alt="{{ $siaran[0]->kategori}}">
    <div class="card-body text-center">
       <h5 class="card-title"><a href=  "/single_post/{{ $siaran[0]->slug}}" class="text-decoration-none text-dark" >{{ $siaran[0]->title}}</a> </h5>
       <p class="card-text"> 
         <p class="card-text">
           <small class="text-muted">
 by <a href=  "/authors/{{$siaran[0]->user->id}}">{{$siaran[0]->user->name}}</a> in <a href = '/Kategori/{{$siaran[0]->kategori->slug}}'class='text-decoration-none'>{{$siaran[0]->kategori->name}}  #</a>
 {{$siaran[0]->created_at->diffForHumans()}}
             </small>
         </p>
         <p>{{$siaran[0]->excerpt}} </p>
         <a href='/single_post/{{ $siaran[0]->slug}}'class='text-decoration-none btn btn-success'> Read More</a>
   </div>

   @else
   <p class="text-center fs-4">No siaran FOund</p>

   @endif
   
   
   <div class="container">
     <div class="row">
      @foreach ($siaran->skip(3) as $siaran)


      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.4)"><a href="/Kategori/{{$siaran->kategori->name}}" class="text-white text-decoration-none">{{$siaran->kategori->name}}</a></div>
          <img src="https:\\source.unsplash.com\800x300?{{ $siaran->kategori}} " class="card-img-top" alt="{{ $siaran->kategori}}">
          <div class="card-body">
            <h5 class="card-title"><a href="/single_post/{{ $siaran->slug}}" class="text-decoration-none text-dark" >{{ $siaran->title}}</a></h5>
              <p>
                <small class="text-muted">
                  <h5>  by <a href=  "/authors/{{$siaran->user->id}}">{{$siaran->user->name}}</a> 
                        
                  </h5>

                </small>
              </p>
              <p>{{$siaran->excerpt}}</p>
            <small class="card-text">  {{$siaran->created_at->diffForHumans()}}</small>
          </div>
        </div>

      </div>


      @endforeach
    </div>
  </div>


  
  
  <!-- <article class = 'mb-5 border-bottom'> 
 
    <h2> <a href='/single_post/{{ $siaran->slug}}'class='text-decoration-none'> {{ $siaran['title'] }}</a></h2>
    <h5>  by <a href=  "/authors/{{$siaran->user->id}}">{{$siaran->user->name}}</a> in <a href = '/Kategori/{{$siaran->kategori->slug}}'class='text-decoration-none'>{{$siaran->kategori->name}}</a>
    </h5>
    <p>{{$siaran->excerpt}}</p>
    <a href='/single_post/{{ $siaran->slug}}'class='text-decoration-none'> Read More...</a>
  </article> -->

  
  
  @endsection
  
  
