<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function __construct(){
        return $this->middleware('auth');
    }
    //index
    public function index(){
        return view('profile.main');
    }


    // Bio information
    public function bio(){

    }
}
