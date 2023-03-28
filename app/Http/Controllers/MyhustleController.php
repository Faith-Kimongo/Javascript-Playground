<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyhustleRequest;
use App\Http\Requests\UpdateMyhustleRequest;
use App\Models\Category;
use App\Models\Job;
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
        // Recent Job
        $jobs=Job::latest()->take(5)->get();
        return view('myhustle.index',[
            'myhustles'=>Myhustle::all(),
            'jobs'=>$jobs,
            'categories'=>Category::all()
        ]);
    }

  
    public function create()
    {
        //create
        return view('myhustle.create');
    }

   
    public function store(StoreMyhustleRequest $request)
    {

        // Image
        $image = $request->file('image');

        $imageName = time().'.'.$image->extension();  
    
        $image->move(public_path('myhustleImages'), $imageName);
        //store

        $hustle=new Myhustle();
        $hustle->user_id=Auth::id();
        $hustle->title=$request->title;
        $hustle->location=$request->location;
        $hustle->image = $imageName;
        $hustle->desc=$request->desc;
        $hustle->price=$request->price;
        $hustle->save();

        return back()->with('success','Hustle posted successfully');
    }

  
    public function show(Myhustle $myhustle)
    {
        //show myhustle
        $jobs=Job::latest()->take(5)->get();

        return view('myhustle.show',[
            'categories'=>Category::all(),
            'hustle'=>$myhustle,
            'jobs'=>$jobs

        ]);
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
