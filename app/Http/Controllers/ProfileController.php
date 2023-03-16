<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    // workexperience
    public function workexperienceCreate(){
        return view('profile.create-workexp');
    }

    public function workexpStore(Request $request){
        //    Save the education
    
        $workexp=new Work_experiences();
        $workexp->user_id=Auth::id();
        $workexp->name=$request->name;
        $workexp->title=$request->title;
        $workexp->start_date=$request->start_date;
        $workexp->end_date=$request->end_date;
        $workexp->responsibility=$request->responsibility;
        $workexp->status=$request->status;
        $workexp->save();
    
        return redirect('user-profile');
        }

        // skills update
        public function skills(Request $request){
            
            // save skills for user
            Auth::user()->skills()->attach($request->skills);

            return back()->with('success','Skills added successfully!');
        }

public function uploadCV(Request $request){
    
   // Validate the file upload
   $request->validate([
    'file-upload' => 'required|mimes:pdf|max:10240' // maximum file size is 10 MB
]);

// Get the authenticated user
$user = Auth::user();

// Generate a unique file name based on user ID and timestamp
$user_name = str_replace(' ', '', $user->name);
$filename = $user_name . '_CV_' . date('Ymd') . '.' . $request->file('file-upload')->getClientOriginalExtension();


// Handle the file upload
if ($request->hasFile('file-upload')) {
    Storage::disk('local')->putFileAs('uploads', $request->file('file-upload'), $filename);
    $user->cv = $filename;
    $user->save();
}

// Redirect to a success page
return redirect()->back()->with('success', 'CV uploaded successfully.');

}
}
