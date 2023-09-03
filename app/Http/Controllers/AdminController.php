<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if(auth()->user()){
            return view('admin.index');
        }else{
            return view('login.login');
        }
    }
    public  function user(){
        return view('admin.userTable');
    }
    public function profile(){
        return view('admin.profile');
    }
    public function tabel(){
        return view('admin.tabel');
    }
    public function faq(){
        return view('admin.faq');
    }
    public function contact(){
        return view('admin.contact');
    }
    public function register(){
        return view('admin.register');
    }
    public function login(){
        return view('admin.login');
    }
    public function error(){
        return view('admin.error');
    }
    public function blank(){
        return view('admin.blank');
    }
    public function alert(){
        return view('admin.alert');
    }
    public function accordion(){
        return view('admin.accordion');
    }
    public function badges(){
        return view('admin.badges');
    }
}
