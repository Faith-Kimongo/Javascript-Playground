<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyhustleRequest;
use App\Http\Requests\UpdateMyhustleRequest;
use App\Models\Myhustle;

class MyhustleController extends Controller
{
   
    public function index()
    {
        //index
        return view('myhustle.index');
    }

  
    public function create()
    {
        //create
        return view('myhustle.create');
    }

   
    public function store(StoreMyhustleRequest $request)
    {
        //check
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
