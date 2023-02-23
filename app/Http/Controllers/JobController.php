<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class JobController extends Controller
{

    public function __construct(){
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        return view('jobs.index',[
            'jobs'=>Job::all(),
            'pinned_job'=>Job::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        //create
        return view('jobs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        //store
        $validator = Validator::make($request->all(), [
            'job_title' => 'required',
            'job_location' => 'required',
            'job_desc' => 'required',
            'category_id' => 'required|exists:categories,id',
            'job_deadline' => 'required|date',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $job = new Job;
        $job->title = $request->input('job_title');
        $job->user_id=Auth::id();
        $job->location = $request->input('job_location');
        $job->category_id = $request->input('category_id');
        $job->description = $request->input('job_desc');
        $job->responsibilities = $request->input('job_resp');
        $job->requirements = $request->input('job_req');
        $job->remuneration = $request->input('job_remuneration');
        $job->deadline = $request->input('job_deadline');
        $job->cover_letter = $request->input('cover_letter') ?? 0;
        $job->save();

        return back()->with('success','Job Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

   
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
