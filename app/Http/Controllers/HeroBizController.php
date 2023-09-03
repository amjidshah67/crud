<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroBizController extends Controller
{
    public function index(){
        return view('herobiz.index');
    }
    public function index_two(){
        return view('herobiz.index-2');
    }
    public function index_three(){
        return view('herobiz.index-3');
    }
    public function index_four(){
    return view('herobiz.index-4');
   }
   public function blog(){
        return view('herobiz.blog');
   }
    public function blog_detail(){
        return view('herobiz.blog-detail');
    }
    public function portfolio(){
        return view('herobiz.portfolio');
    }
}
