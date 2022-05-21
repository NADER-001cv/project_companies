<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      //   return "any"  ;
        return view('pages.companies.index', [
            'companies' =>Company::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.companies.create', [
            'jobs' =>Job::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:2',
            'mobile' => 'required|string|min:2',
            'email' => 'required|string|min:5','unique:companies',
            'gallery' => 'image|max:2048|mimes:jpg,jpeg,gif,png',
    ]);

    Company::create([
        'job_id' => $request->job_id,
        'name' => $request->name,
        'email' => $request->email,
        'mobile_no' => $request->mobile,
        'minimum_education' => $request->minimum_education,
        'minimum_experience' => $request->minimum_experience,
        'description' => $request->description,
        'gallery' => $request->file('gallery')->store('companies', 'public'),
    ]);
    return redirect()->route('companies.index')->with('success', 'Operation is successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
