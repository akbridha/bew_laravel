<?php

namespace App\Http\Controllers;

use App\Models\postModel;
use App\Models\Siaran;

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
            "title"=>"tahun"
            ,
            "siaran"=>Siaran::all()
        ]);
    }

    

    public function singlePost(Siaran $siaran){
        return view('post',[
            "title"=>"Post detail"
            // ,"post"=>Siaran::find($id)
            ,"siaran"=>$siaran
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
