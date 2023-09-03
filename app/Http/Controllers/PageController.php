<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePagesRequest;
use App\Models\Pages;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Pages::all();
        return view('admin.page.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePagesRequest $request)
    {
        $dataStore =[
            'title' => $request->title,
            'slug' => $this->slugify($request->slug),
            'contents' => $request->contents,
        ];
        $pageStore = Pages::create($dataStore);
        if ($pageStore){
            return redirect()->route('pages.index')->with('success', 'Great! You have a successfully created page user');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pageData = Pages::find($id);
        return view('admin.page.show',compact('pageData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageData = Pages::find($id);
        return view('admin.page.edit',compact('pageData'));
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
//        dd($id);
            Pages::where('id',$id)->update
            ([
                'title' => $request->title,
                'slug' => $this->slugify($request->slug),
                'contents' => $request->contents,
            ]);
            return redirect()->route('pages.index')->with('success', 'Great! You have a successfully update pages ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Pages::find($id);
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Great! You have a successfully deleted Pages');
    }
}
