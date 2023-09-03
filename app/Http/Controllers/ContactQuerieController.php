<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactQuerieRequest;
use App\Models\ContactQuerie;
use Illuminate\Http\Request;

class ContactQuerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=ContactQuerie::all();
        return view('admin.contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('front.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactQuerieRequest $request)
    {
        $contact =[
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'subject' => $request->input('subject'),
          'message' => $request->input('message'),
        ];
        $contactStore = ContactQuerie::create($contact);
        if ($contactStore){
            return redirect()->route('ContactQuerie.index')->with('success','Greate! You Have a Successfully Contact Create');
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
        $contact_show = ContactQuerie::find($id);
        return view('admin.contact.show',compact('contact_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_edit = ContactQuerie::find($id);
        return view('admin.contact.edit',compact('contact_edit'));
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
        $contact_data =[
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];
        $contact_store = ContactQuerie::where('id',$id)->update($contact_data);
        if ($contact_store){
            return redirect()->route('ContactQuerie.index')->with('Great! You Have a Successfully Update Contact');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact_remove = ContactQuerie::find($id);
        $contact_remove->delete();
        return redirect()->route('ContactQuerie.index')->with('success','Greate! You Have a Successfully delete Contact');
    }
}
