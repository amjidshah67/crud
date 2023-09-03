<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModrenaController extends Controller
{
    public  function index(){
        return view('modrena.index');
    }
    public  function about(){
        return view('modrena.about');
    }
    public  function service(){
        return view('modrena.service');
    }
    public  function portfolio(){
        return view('modrena.portfolio');
    }
    public function  team(){
        return view('modrena.team');
    }
    public function  blog(){
        return view('modrena.blog');
    }
    public function  contactUs(){
        return view('modrena.contact');
    }
}
