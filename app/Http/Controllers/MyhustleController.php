<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyhustleRequest;
use App\Http\Requests\UpdateMyhustleRequest;
use App\Models\Myhustle;
use Illuminate\Support\Facades\Auth;

class MyhustleController extends Controller
{

    public function __construct(){
        return $this->middleware('auth');
    }
   
    public function index()
    {
        //index
        return view('myhustle.index',[
            'myhustles'=>Myhustle::all()
        ]);
    }

  
    public function create()
    {
        //create
        return view('myhustle.create');
    }

   
    public function store(StoreMyhustleRequest $request)
    {
        //store

        $hustle=new Myhustle();
        $hustle->user_id=Auth::id();
        $hustle->title=$request->title;
        $hustle->location=$request->location;
        $hustle->desc=$request->desc;
        $hustle->price=$request->price;
        $hustle->save();

        return back()->with('success','Hustle posted successfully');
    }

  
    public function show(Myhustle $myhustle)
    {
        //
    }

   
    public function edit(Myhustle $myhustle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyhustleRequest  $request
     * @param  \App\Models\Myhustle  $myhustle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyhustleRequest $request, Myhustle $myhustle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Myhustle  $myhustle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Myhustle $myhustle)
    {
        //
    }
}
