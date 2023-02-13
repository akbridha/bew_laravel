
@extends('layouts.beranda')
@section('container')
      
  
  <H2 mb-7> {{$title}} </H2>
 <!-- {{ var_dump($kategori)}} -->
<div class="container">
    <div class="row">
    @foreach ($kategori as $kategori)
    <div class="col-md-4">
        <a href="/Kategori/{{$kategori->name}}">
            <div class="card bg-dark text-white ">
                <img src="https:\\source.unsplash.com\800x800?{{$kategori->name}}" class="card-img" alt="#">
                <div class="card-img-overlay d-flex align-items-center">
                    <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.3)">{{$kategori->name}}</h5>

                
                
                
                
                    <h5>              </h5>
                
                </div>   
            </div>
        </a>
    </div>
    @endforeach
    
    </div>    
</div>
 @endsection


