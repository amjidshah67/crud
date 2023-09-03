<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Models\Brand;
use App\Models\Producte;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Producte::all();
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        $productStore = [
            'title' => $request->title,
            'slug' => $this->slugify($request->slug),
            'status' => $request->status,
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $getImage = $this->image_upload($file, 'uploads/services');
            $productStore['image'] = 'services/' . $getImage;
        }
        $productData = Producte::create($productStore);
        if ($productData) {
            return redirect()->route('productes.index')->with('success', 'Greate! You Have a Create Products');
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
        $products = Producte::find($id);
        return view('admin.product.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productEdit = Producte::find($id);
        return view('admin.product.edit',compact('productEdit'));
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
     $productData = $request ->except([
        '_token',
        '_method',
        'previous_image',
        'image',
     ]);
     if ($request->hasFile('image')){
         $file = $request->file('image');
         $getimage = $this->image_upload($file,'uploads/services');
         if (file_exists('uploads/services'.$getimage)
         &&!empty($request->previous_image && file_exists('uploads/'.$request->previous_image))){
             unlink('uploads/' . $request->previous_image);
         }
     }else{
         $productData['image'] = $request->previous_image;
     }
        Producte::where('id', $id)->update($productData);
            return redirect()->route('productes.index')->with('success', 'Greate! You Have a Update Products');
        }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productDelete = Producte::Find($id);
        $productDelete->Delete();
        return redirect()->route('productes.index')->with('success', 'Greate! You Have a Delete Products');
    }
}
