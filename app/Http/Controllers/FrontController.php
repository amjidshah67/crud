<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactQuerieRequest;
use App\Http\Requests\StoreNewsLettersRequest;
use App\Models\Brand;
use App\Models\Categorie;
use App\Models\ContactQuerie;
use App\Models\Faqe;
use App\Models\NewsLetters;
use App\Models\Pages;
use App\Models\Pakage;
use App\Models\Producte;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Teams;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public  function index(){
        $users = User::all();
        $brands = Brand::where('status',1)->get();
        $pages = Pages::all();
        $faqs = Faqe::all();
        $skills = Skill::all();
        $services = Service::where('status',1)->limit(4)->get();
        $products = Producte::all();
        $teams = Teams::all();
        $pakeges =Pakage::all();
        $faqs_2 = Faqe::all();
        return view('front.index',
            compact('users','brands','pages','faqs', 'skills','services','products',
                'teams', 'pakeges','faqs_2'));
    }
    public function store(StoreContactQuerieRequest $request)
    {
        $contact =[
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        ContactQuerie::create($contact);
    }
    public function news_letter(StoreNewsLettersRequest $request){
        $news_data = [
            'email' => $request->input('email'),
        ];

        $news_store = NewsLetters::create($news_data);
        if ($news_store){
            return redirect()->route('front')->with('success','Greate! You Have a Succfully Create News Letters');
        }
    }

}
