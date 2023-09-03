<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoFolioController extends Controller
{
    public function index(){
        return view('photofolio.index');
    }
    public function about_us(){
        return view('photofolio.about');
    }
    public function contact(){
        return view('photofolio.contact');
    }
    public function gallery_singal(){
        return view('photofolio.gallery-singal');
    }
    public function service(){
        return view('photofolio.services');
    }
    public function simple(){
        return view('photofolio.simple-Inner');
    }
}
