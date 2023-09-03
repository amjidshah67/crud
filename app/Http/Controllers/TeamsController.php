<?php

namespace App\Http\Controllers;

use App\Models\MediaFile;
use App\Models\Page;
use App\Models\Producte;
use App\Models\SeoRequirement;
use App\Models\Teams;
use Illuminate\Http\Request;


class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamData = Teams::all();
        return view('admin.team.index', compact('teamData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_data = [
            'heading' => $request->input('heading'),
            'title' => $request->input('title'),
            'slug' => $this->slugify($request->input('slug')),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $getImage = $this->image_upload($file, 'uploads/team');
            $team_data ['image'] = 'team/' . $getImage;
        }
        $Save_data = Teams::create($team_data);
        if ($Save_data) {
            return redirect()->route('Teames.index')->with('success', 'Graet ! You have a Successfuly create Teams');
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
        $data_show = Teams::find($id);
        return view('admin.team.show',compact('data_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team_edit = Teams::find($id);
        return view('admin.team.edit',compact('team_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
{
        $teamData = $request->except([
            '_token',
            '_method',
            'previous_image',
            'image',
        ]);

            if($request->hasFile('image')){
                $file = $request->file('image');
                $getImage = $this->image_upload($file, 'uploads/team');
                if (file_exists('uploads/' . $getImage)
                && !empty($request->previous_image && file_exists('uploads/' . $request->previous_image))){
                    unlink('uploads/' . $request->previous_image);
                }
                else{
                    $teamData['image'] = $request->previous_image;
                }
            }
    Teams::where('id', $id)->update($teamData);
        return redirect()->route('Teames.index')->with('success', 'Graet ! You have a Successfuly create Teams');

}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remove = Teams::find($id);
        $remove->delete();
        return redirect()->route('Teames.index')->with('success','Graet ! You have a Successfuly Delete Teams');
    }

}
