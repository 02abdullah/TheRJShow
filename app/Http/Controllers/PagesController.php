<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('Pages/welcome');
    }
    public function getAbout(): string
    {

        return view('Pages/about');
    }
    public function getSearch(){

    }
//    public function getBlog(){
//        return view('Pages/blog');
//    }
    public function getVideos(){
        return view('Pages/videos');
    }



}
