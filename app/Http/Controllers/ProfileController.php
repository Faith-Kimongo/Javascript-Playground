<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('profile.bio');
    }

    // Education create
    public function educationCreate(){
        return view('profile.create-education');
    }



    // Store education
    public function educationStore(Request $request){
    //    Save the education
    $education=new Education();
    $education->user_id=Auth::id();
    $education->name=$request->name;
    $education->field=$request->field;
    $education->start_date=$request->start_date;
    $education->end_date=$request->end_date;
    $education->description=$request->description;
    $education->status=$request->status ?? 0;
    $education->save();

    return back()->with('success','Education Added successfully!');
    }
}
