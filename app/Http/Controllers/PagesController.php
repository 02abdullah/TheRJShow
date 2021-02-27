<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('Pages/welcome');
    }
    public function getAbout(): string
    {
//        $first = 'Moe';
//        $last = 'Babdullah';
//
//        $full = $first." ".$last;
//        $email = 'u1755293@unimail.hud.ac.uk';
//        $data = [];
//        $data['email'] =$email;
//        $data['fullname'] =$full;

        return view('Pages/about');
    }
    public function getContact(){

    }
    public function getBlog(){
        return view('Pages/blog');
    }
    public function getVideos(){
        return view('Pages/videos');
    }



}
