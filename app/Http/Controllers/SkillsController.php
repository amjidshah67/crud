<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillsRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillsRequest $request)
    {
        $skillStore = [
            'language' => $request->language,
            'slug' => $this->slugify($request->slug),
            'progress' =>$request->progress,
        ];
        $skilldata = Skill::create($skillStore);
        if ($skilldata){
            return redirect()->route('skilles.index')->with('success','Great! You have a successfully created page skills');
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
        $skillsRecord = Skill::find($id);
        return view('admin.skill.show',compact('skillsRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Skill::find($id);
        return view('admin.skill.edit',compact('item'));
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
        Skill::where('id',$id)->update
        ([
            'language' => $request->language,
            'slug' => $this->slugify($request->sluge),
            'progress' => $request->progress,
        ]);
        return redirect()->route('skilles.index')->with('success', 'Great! You have a successfully update Skills ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skillRemove = Skill::find($id);
        $skillRemove->delete();
        return redirect()->route('skilles.index')->with('success', 'Great! You have a successfully deleted Pages');
    }
}
