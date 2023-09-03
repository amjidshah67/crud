<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqeRequest;
use App\Models\Faqe;
use Illuminate\Http\Request;

class Fagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faqe::all();
        return view('admin.faqs.index',compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqeRequest $request)
    {
        $faqData = [
            'question' => $request->question,
            'answer' => $request->answer,
        ];
        $dataStore = Faqe::create($faqData);
        if ($dataStore){
        return redirect()->route('faqes.index')->with('success', 'Great! You have a successfully created page user');
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
        $faq = Faqe::find($id);
        return view('admin.faqs.show',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faqes = Faqe::find($id);
        return view('admin.faqs.edit',compact('faqes'));
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
        Faqe::where('id' , $id)->update
        ([
            'question' => $request->question,
            'answer' => $request->answer,
            ]);
        return redirect()->route('faqes.index')->with('success', 'Great! You have a successfully update faqs ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqe = Faqe::find($id);
        $faqe->delete();
        return redirect()->route('faqes.index')->with('success', 'Great! You have a successfully delete faqs ');

    }
}
