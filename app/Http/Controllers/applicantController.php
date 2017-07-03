<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use App\job; use App\exam;
use App\question; use App\notification;
use App\applicant; use App\grade;
class applicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'home';
        $user = Auth::guard('applicant')->user()->id; 
        $jobs = job::all()->take(6);
        $notes = Auth::guard('applicant')->user()->notifications;
        return view('applicant.home')->with([
            'jobs' => $jobs,
            'page' => $page,
            'user' => $user,
            'notes' => $notes
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

    public function examine()
    {   
        $page = 'exam';
        $jobs = Auth::guard('applicant')->user()->jobs;
        $notes = Auth::guard('applicant')->user()->notifications;
        return view('applicant.take_exam')->with([
            'page' => $page,
            'jobs' => $jobs,
            'notes' => $notes

            ]);
    }

    public function applicate()
    {
        $page = 'apply';
        $applys = Auth::guard('applicant')->user()->jobs;
        $notes = Auth::guard('applicant')->user()->notifications;
        return view('applicant.applications')->with([
            'page' => $page,
            'applys' => $applys,
            'notes' => $notes

            ]);
    }

     public function notificationV()
    {
        $page = 'notify';
        $applys = Auth::guard('applicant')->user()->jobs;
        $notes = Auth::guard('applicant')->user()->notifications;
        return view('applicant.notification')->with([
            'page' => $page,
            'applys' => $applys,
            'notes' => $notes

            ]);
    }

    public function del(notification $id)
    {
        
        $id->delete();
         return 'Done';
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function apply(job $id)
    {
        $seeker = Auth::guard('applicant')->user();
         return $id->applicants()->attach($seeker);
    }

    public function test(exam $id)
    {
        $page = 'exam';
        if(count($id->questions)){
            $questions = $id->questions()->paginate(1);
$notes = Auth::guard('applicant')->user()->notifications;
            return view('applicant.exam_sheet')->with([
                'page' => $page,
                'questions' => $questions,
                'exam'  => $id,
                'notes' => $notes

                ]);
        }
        else{
            return view('applicant.exam_sheet')->with([
                'page' => $page,
                'exam' => $id
                ]);
        }
    }

    public function mark(exam $exam_id, Request $request)
    {
        $grade = grade::where([
            'exam_id'   =>  $exam_id->id,
            'applicant_id'  => \Auth::guard('applicant')->user()->id
        ])->first();

        if($grade){
            // has started taking the exam and grade row exists so do nothing
        } else {
            // is new to the exam
            $grade = new grade([
                'exam_id'    => $exam_id->id,
                'applicant_id'  => \Auth::guard('applicant')->user()->id,
                'number' => $request->total
            ]);
            $grade->save();
        }

        $question = question::find($request->question_id);
        $right_answer = $question->right_answer;

        // update the grade's correct value
        if($right_answer == $request->answer[0]){
            $grade->correct = $grade->correct + 1;
            $grade->save();
        }

        if($request->has_next){
            // has more exams
            return redirect($request->has_next); // next question
        } else if($request->exam_done){
            // the exam is finished
            return redirect('applicant/home'); // the exam is over
        }
    }

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
