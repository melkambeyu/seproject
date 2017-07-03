<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\notification;
class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Auth::guard('company')->user()->jobs()->orderBy('updated_at', 'desc')->get();
        $exams = Auth::guard('company')->user()->exams()->orderBy('updated_at', 'desc')->get();
        $applicants = array();
        foreach($jobs as $job){
            array_push($applicants, $job->applicants()->get());
        }

        return view('company.layout.index')->with([
            'jobs' => $jobs,
            'exams' => $exams,
            'applicants' => $applicants
        ]);
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
    public function notify($app_id, $job_id)
    {
        $not = new notification([
            'applicant_id' => $app_id,
            'job_id' => $job_id
            ]);
        $not->save();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
