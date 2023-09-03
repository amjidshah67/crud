<?php

namespace App\Http\Controllers;

use App\Models\Pakage;
use Illuminate\Http\Request;

class PakagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakage = Pakage::all();
        return view('admin.pakage.index',compact('pakage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pakage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pakageData = [
          'heading' => $request->input('heading'),
          'title' => $request->input('title'),
          'slug' => $this->slugify($request->input('slug')),
          'description' =>$request->input('description'),
            'status' => $request->input('status'),
        ];
       $pakageStore =  Pakage::create($pakageData);
       if($pakageStore){
        return redirect()->route('Pakages.index')->with('success','Greate ! You Have a Successfully Create Pakage');
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
        $pakageShow = Pakage::find($id);
        return view('admin.pakage.show',compact('pakageShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pakageEdit = Pakage::find($id);
        return view('admin.pakage.edit',compact('pakageEdit'));
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
        Pakage::where('id',$id)->update
        ([
            'heading' => $request->input('heading'),
            'title' => $request->input('title'),
            'slug' => $this->slugify($request->input('slug')),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('Pakages.index')->with('success','Graete ! You Have a Successfully Update Pakage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pakageRemove = Pakage::find($id);
        $pakageRemove->delete();
        return redirect()->route('Pakages.index')->with('success','Greate ! You Have a Successfully Delete Pakage');
    }
}
