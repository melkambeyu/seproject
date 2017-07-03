<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\exam;
use App\question;

class questionsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
         $this->validate($request, [
            'question' => 'required|max:255',
            'choices'   => 'required|array|size:4',
            'choices.*' => 'filled|required',
            'right_answer' => 'required',
        ]);
        $exam = exam::find($id);
        return $exam->questions()->create($request->all());
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
       $question = question::find($id);
       return $question;
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
        $this->validate($request, [
            'question' => 'required|max:255',
            'choices'   => 'required|array|size:4',
            'choices.*' => 'filled|required',
            'right_answer' => 'required',
        ]);

        $data = [
            'question'  => $request->question,
            'choices'   => $request->choices,
            'right_answer'  =>  $request->right_answer
        ];
        question::find($id)->update($data);
        return question::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $id)
    {
         $id->delete();
         return 'Done';
    }
}
