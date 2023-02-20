<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyHustleRequest;
use App\Http\Requests\UpdateMyHustleRequest;
use App\Models\MyHustle;

class MyHustleController extends Controller
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
     * @param  \App\Http\Requests\StoreMyHustleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyHustleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyHustle  $myHustle
     * @return \Illuminate\Http\Response
     */
    public function show(MyHustle $myHustle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyHustle  $myHustle
     * @return \Illuminate\Http\Response
     */
    public function edit(MyHustle $myHustle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyHustleRequest  $request
     * @param  \App\Models\MyHustle  $myHustle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyHustleRequest $request, MyHustle $myHustle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyHustle  $myHustle
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyHustle $myHustle)
    {
        //
    }
}
