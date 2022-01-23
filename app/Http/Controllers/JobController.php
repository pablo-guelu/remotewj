<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use App\Http\Resources\JobResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['jobs' => JobResource::collection(Job::all())]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        // dd($request);

        // $validator = Validator::make($request->all(),[
        //     'job.title' => 'required',
        //     'job.description' => 'required',
        //     'job.url' => 'required',
        //     'job.category' => 'required',
        //     'job.region' => 'required',
        //     'job.timezone' => 'required',

        // ]);

        $job = new Job();
        $job->title = $request['job']['title'];
        $job->description = $request['job']['description'];
        $job->url = $request['job']['url'];
        $job->category = $request['job']['category'];
        $job->region = $request['job']['region'];
        $job->timezone = $request['job']['timezone'];

        $job->save();

        $jobs = Job::all();
        $jobs->searchable();

        return response()->json(['job' => $job]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return response()->json(['job' => new JobResource(Job::find($job)->first())]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
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

    // public function search(Request $request) {
    //     dd($request);
    //     $jobs = Job::search($request)->get();
    //     return response()->json(['jobs' => $request]);
    // }
}
