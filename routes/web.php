<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.beranda');
});
Route::get('about', function () {
    return view('layouts.akbar',[
        "title"=>"about",
        "nickorigin"=>"rida",
        "nickboarding"=>"ridaw",
        "img"=>"futu.jpg"
    ]);
});

Route::get('tahun', function () {
    $article = [
    
        [
        "title" => "Your cocot",
        "slug" => "Your-cocot",
        "author" => "bahrul",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Neque aliquam recusandae quaerat blanditiis eaque 
        consequuntur, iure excepturi optio magni mollitia, 
        reprehenderit possimus, ad adipisci odio ratione nostrum 
        perspiciatis ipsum asperiores esse. Impedit iste quia 
        nobis sapiente dicta. Earum, aut odio, id enim alias
        soluta totam obcaecati ad quo, quidem iure? Qui facilis 
        recusandae commodi iste vitae facere harum distinctio
       amet dolores! Architecto, totam natus. Eos, nostrum
       sint repellendus consequuntur pariatur modi rerum! 
        Expedita ratione nulla corporis illum perspiciatis
       voluptate corrupti minus nam vel nisi harum providen."
        ],
        [
    
        "title" => "parra bellum",
        "slug" => "parra-bellum",
        "author" => "theodor",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Neque aliquam recusandae quaerat blanditiis eaque 
        consequuntur, iure excepturi optio magni mollitia, 
        reprehenderit possimus, ad adipisci odio ratione nostrum 
        perspiciatis ipsum asperiores esse. Impedit iste quia 
        nobis sapiente dicta. Earum, aut odio, id enim alias
        soluta totam obcaecati ad quo, quidem iure? Qui facilis 
        recusandae commodi iste vitae facere harum distinctio
       amet dolores! Architecto, totam natus. Eos, nostrum
       sint repellendus consequuntur pariatur modi rerum! 
        Expedita ratione nulla corporis illum perspiciatis
       voluptate corrupti minus nam vel nisi harum provident 
        earum id, doloribus enim ipsum facilis excepturi."
    
        ],
    ];
    return view('layouts.tahun',[
        "title"=>"tahun",
        "post" => $article
    ]);
});


Route::get('single_post/{slug}', function($slug){
   $posfocus=
    [
     [
        "title" => "Your cocot",
        "slug" => "Your-cocot",
        "author" => "bahrul",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Neque aliquam recusandae quaerat blanditiis eaque 
        consequuntur, iure excepturi optio magni mollitia, 
        reprehenderit possimus, ad adipisci odio ratione nostrum 
        perspiciatis ipsum asperiores esse. Impedit iste quia 
        nobis sapiente dicta. Earum, aut odio, id enim alias
        soluta totam obcaecati ad quo, quidem iure? Qui facilis 
        recusandae commodi iste vitae facere harum distinctio
       amet dolores! Architecto, totam natus. Eos, nostrum
       sint repellendus consequuntur pariatur modi rerum! 
        Expedita ratione nulla corporis illum perspiciatis
       voluptate corrupti minus nam vel nisi harum providen."
        ],
        [
    
        "title" => "parra bellum",
        "slug" => "parra-bellum",
        "author" => "theodor",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Neque aliquam recusandae quaerat blanditiis eaque 
        consequuntur, iure excepturi optio magni mollitia, 
        reprehenderit possimus, ad adipisci odio ratione nostrum 
        perspiciatis ipsum asperiores esse. Impedit iste quia 
        nobis sapiente dicta. Earum, aut odio, id enim alias
        soluta totam obcaecati ad quo, quidem iure? Qui facilis 
        recusandae commodi iste vitae facere harum distinctio
       amet dolores! Architecto, totam natus. Eos, nostrum
       sint repellendus consequuntur pariatur modi rerum! 
        Expedita ratione nulla corporis illum perspiciatis
       voluptate corrupti minus nam vel nisi harum provident 
        earum id, doloribus enim ipsum facilis excepturi."
    
        ],
    ];


    $new_post=[];
    foreach($posfocus as $pos){
            if($pos["slug"] === $slug){
                $new_post = $pos;
           }
        }
    
    return view('post', [
        "title" => "postfocus",
        "body" => $new_post,

        
        ]);
});




Route::get('/welcome', function () {



    return view('layouts.welcome',[
        "title"=>"welcome"
    ]);
});

Route::get('tes', function () {



    return view('post',[
        "title"=>"tes pos"
    ]);
});
