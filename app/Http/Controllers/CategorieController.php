<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Categorie::all();
        return view('admin.categorie.index',compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {
        $categorieData =[
            'title' => $request->title,
            'slug' => $this->slugify($request->slug),
            'product' => $request->product,
            'description' => $request->description,
        ];
        $store = Categorie::create($categorieData);
        if ($store){
            return redirect()->route('categories.index')->with('success', 'Great! You have a successfully create Categories ');
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
        $categorieRecord = Categorie::Find($id);
        return view('admin.categorie.show',compact('categorieRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorieItem = Categorie::find($id);
        return view('admin.categorie.edit',compact('categorieItem'));
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
        Categorie::where('id',$id)->update
        ([
            'title' => $request->title,
            'slug' => $this->slugify($request->slug),
            'product' => $request->product,
            'description' => $request->description,
        ]);
        return redirect()->route('categories.index')->with('scuccess','Great! You have a successfully update Categories ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorieDelele = Categorie::find($id);
        $categorieDelele->delete();
        return redirect()->route('categories.index')->with('scuccess','Great! You have a successfully Delete Categories ');
    }
}
