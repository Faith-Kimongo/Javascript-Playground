<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyhustleRequest;
use App\Http\Requests\UpdateMyhustleRequest;
use App\Models\Myhustle;

class MyhustleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMyhustleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyhustleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Myhustle  $myhustle
     * @return \Illuminate\Http\Response
     */
    public function show(Myhustle $myhustle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Myhustle  $myhustle
     * @return \Illuminate\Http\Response
     */
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
