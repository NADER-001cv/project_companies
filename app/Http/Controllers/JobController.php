<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.jobs.index',[
            'jobs' => Job::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jobs.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'description' => 'required|string|min:5',
            'gallery' => 'image|max:2048|mimes:jpg,jpeg,gif,png',
    ]);

    Job::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'description' => $request->description,
        'gallery' => $request->file('gallery')->store('jobs', 'public')
    ]);
    return redirect()->route('jobs.index')->with('success', 'Operation is successful !');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('pages.jobs.edit',[
            'categories' => Category::all(),
            'job' =>$job
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'description' => 'required|string|min:5',
    ]);


        $job->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'gallery' => $request->hasFile('gallery') ? $request->file('gallery')->store('jobs', 'public') : $job->gallery
        ]);
        return redirect()->route('jobs.index')->with('success', 'Operation is successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $file_path = public_path('/storage/'.$job->gallery);
        unlink($file_path);
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Operation is successful !');

    }
}
