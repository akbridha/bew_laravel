<?php

namespace App\Http\Controllers;

use App\Models\postModel;
use Illuminate\Http\Request;

class postController extends Controller
{
    //

    // public function index(){

    //     return view('layouts.tahunan',
    //     [
    //         "title"=>"Post Tahunan"  ,
    //         "post"=>

    //     ])
    // }
    public function landingBeranda() {
        return view('layouts.beranda',[
            "title"=>"Landing"]);
    }

    public function tahunan() {
    

        return view('layouts.tahun',[
            "title"=>"tahun",
            "post" => postModel::all()
        ]);
    }

    

    public function singlePost($slug){
        return view('post',[
            "title"=>"Post detail"
            ,"body"=>postModel::find($slug)
            ])
            ;
    }
    public function about() {
        return view('layouts.akbar',[
            "title"=>"about",
            "nickorigin"=>"rida",
            "nickboarding"=>"ridaw",
            "img"=>"futu.jpg"
        ]);
    }




    public function welcome() {
        return view('layouts.welcome',[
            "title"=>"welcome"
        ]);
    }


    public function tes(){
        return view('layouts.beranda',[
            "title"=>"tesPage"
        ]);
    }
}
