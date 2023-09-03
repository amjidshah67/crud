<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $stor = [
            'title' => $request->title,
            'slug' => $this->slugify($request->slug),
            'status' => $request->status,
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $getImage = $this->image_upload($file, 'uploads/services');
            $stor['image'] = 'services/' . $getImage;
        }
        $data = Brand::create($stor);
        if ($data) {
            return redirect()->route('brands.index')->with('success', 'Great! You have a successfully created Brand');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branded = Brand::find($id);
        return view('admin.brand.show', compact('branded'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branded = Brand::find($id);
        return view('admin.brand.edit', compact('branded'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except([
            '_token',
            '_method',
            'previous_image',
            'image',
        ]);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $getImage = $this->image_upload($file, 'uploads/services');
            if (file_exists('uploads/' . $getImage)
                && !empty($request->previous_image && file_exists('uploads/' . $request->previous_image))) {
                unlink('uploads/' . $request->previous_image);
            }
        } else {
            $data['image'] = $request->previous_image;
        }
        Brand::where('id', $id)->update($data);
        return redirect()->route('brands.index')->with('success', 'Great! You have a successfully Update Brand');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Great! You have a successfully deleted Brands');
    }
}
