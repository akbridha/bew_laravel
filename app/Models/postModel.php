<?php

namespace App\Models;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class postModel
 /*extends Model*/
{
    // use HasFactory;

    private static $article =
    [
     [
        "title" => "Your cocot is Ur GOal",
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
    
        "title" => "sii vis pacem parra bellum",
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

    public static function all(){

       return collect(self::$article);
    }
    public static function find($slug){

    // $new_post=[];
    // $article = self::$article;
    // foreach($article as $pos){
    //         if($pos["slug"] === $slug){
    //             $new_post = $pos;  // ===  Sebelum pake collection=========
    //        }
    //     }

    //    return $new_post;


    //============pake collection

    $new_post = static::all();
    return $new_post->firstWhere('slug', $slug);


    }
}
