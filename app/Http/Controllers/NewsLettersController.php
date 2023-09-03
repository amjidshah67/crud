<?php

namespace App\Http\Controllers;

use App\Models\NewsLetters;
use Illuminate\Http\Request;

class NewsLettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = NewsLetters::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $news_data = [
//            'title' => $request->input('title'),
//            'slug' => $this->slugify($request->input('slug')),
//            'description' => $request->input('description'),
//        ];
//        $news_store = NewsLetters::create($news_data);
//        if ($news_store){
//        return redirect()->route('NewsLetter.index')->with('success','Greate! You Have a Succfully Create News Letters');
//    }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news_show = NewsLetters::find($id);
        return view('admin.news.show',compact('news_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_edit = NewsLetters::find($id);
        return view('admin.news.edit',compact('news_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        NewsLetters::where('id',$id)->update([
            'email' => $request->input('email'),

        ]);
        return redirect()->route('NewsLetter.index')->with('success','You Have a Successfully Update News');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news_delete = NewsLetters::find($id);
        $news_delete->delete();
        return redirect()->route('NewsLetter.index')->with('success','Greate ! You Have a Successfully Delete News');
    }
}
