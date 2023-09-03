<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFontloginRequest;
use App\Http\Requests\StoreFrontRegisterRequest;
use App\Models\FrontLongin;
use App\Models\FrontRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Hash;

class FrontLoginController extends Controller
{
    public function index(){
        return view('front.login.front-login');
    }
    public function registration(){
        return view('front.login.front-register');
    }
    public function login_post(StoreFontloginRequest $request){
        $login = $request->only('email','password');
        if (Auth::attempt( $login)){
            return redirect()->route('front');
        }
        else{
                return redirect()->back()->with('success', 'Incorrect Username or Password');
            }
        }
        public function register_post(StoreFrontRegisterRequest $request){
            $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
            $frontStore = FrontRegister::create($userData);
            if ($frontStore) {
                return redirect()->route('front-login')->with('success', 'Great! You have a successfully Arsha regiter');
            }
        }
        public function logout(){
        return view('front.login.front-login');
        }
}
