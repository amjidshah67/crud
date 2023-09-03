<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;


class AuthenticationController extends Controller
{
     public function index()
    {
        if(!auth()->user()){
            return view('login.login');
        }else{
            return view('admin.index');
        }
    }

    public function register()
    {
        return view('login.registration');
    }

    public function login(StoreLoginRequest $request)
    {
        $user = $request->only('email','password');
        if (Auth::attempt($user)){
            return redirect()->route('admin');
        }else{
            return redirect()->back()->with('success', 'Incorrect Username or Password');
        }
    }


    public function postRegistration(StoreRegistrationRequest $request)
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $store = User::create($userData);
        if ($store) {
            return redirect()->route('login-admin')->with('success', 'Great! You have a successfully regiter');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return view('login.login');
    }
}
