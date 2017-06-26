@extends('layouts.main')

@section('content')
 <div class="row">

      <div id="company_sidebar" class="col s3 #c6ff00 lime accent-3"> 
         <button class="btn waves-effect waves-light" id="add_job">
            Add New Job
         </button>

          <button class="btn waves-effect waves-light" id="create_exam">
              Create Exam
          </button>         
      </div>

      <div class="col s9 job_div">
        <div class="row #f5f5f5 grey lighten-4" style="padding-bottom: 20px;">
          <form id="job_form" action="{{ route('jobs.store') }}" method="POST">
            <div class="input-field col s6 offset-s1">
              <input id="job" type="text" name="name">
              <label for="job">Job Title</label>
            </div>

            <div class="input-field col s6 offset-s1">
              <textarea id="description" name="descrip" class="materialize-textarea"></textarea>
              <label for="description">Job Description</label>
            </div>

            <div class="input-field col s6 offset-s1">
                <input type="date" name="date" class="datepicker">
            </div>
            <div class="col s6 offset-s1" style="margin-top: 1.8em;">
                     <button style="width: 100%;" id="job_save" class="btn waves-effect waves-light" type="submit">
                            Submit
                            <!-- <i class="material-icons right">send</i> -->
                    </button>
              </div>
          </form>
        </div>  
      </div>

      <div class="col s9 question_div hidden"> 
      	<div class="row #f5f5f5 grey lighten-4">
      	<form id="question_form" action="{{ route('questions.store') }}" method="POST">
      		{{ csrf_field() }}
      		<div class="input-field col s8">
      			<input id="question" type="text" name="question">
      			<label for="question">Write the Question</label>
      		</div>

      		<div class="input-field col s5">
      			<input id="choice_a" type="text" name="choices[]">
      			<label for="choice_a">Choice A</label>
      		</div>
      		<div class="input-field col s5">
      			<input id="choice_b" type="text" name="choices[]">
      			<label for="choice_b">Choice B</label>
      		</div>
      		<div class="input-field col s5">
      			<input id="choice_c" type="text" name="choices[]">
      			<label for="choice_c">Choice C</label>
      		</div>
      		<div class="input-field col s5">
      			<input id="choice_d" type="text" name="choices[]">
      			<label for="choice_d">Choice D</label>
      		</div>

      		<div class="input-field col s8">
			    <select name="right_answer">
			      <option value="" disabled selected>Choose The Right Answer</option>
			      <option value="1">Option A</option>
			      <option value="2">Option B</option>
			      <option value="3">Option C</option>
			      <option value="3">Option D</option>
			    </select>
			    <label>Right Answer</label>
			  </div>
                <div class="col s8 offset-s1" style="margin-top: 1.8em;">
      		           <button id="que_save" class="btn waves-effect waves-light" type="submit">
                            Submit
                            <!-- <i class="material-icons right">send</i> -->
                    </button>
             	</div>
      	</form>
      	</div>
      </div>

    </div>
@endsection
