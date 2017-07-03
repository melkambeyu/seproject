@extends('applicant.layout.main')
@section('content')
 	<div class="row exams">
 	@foreach($jobs as $job)
		<div class="card-panel col s5 hoverable" style="margin: 5px 5px; height: 170px;">
	          <h5 class="truncate">{{ $job->exam->job->name }} </h5>
	          <p class="truncate" style="margin-bottom: 40px;">{{ $job->exam->title }}</p>
	          <div class="center-align">
	          <a class="waves-effect waves-light btn btn-small green" href="/applicant/take/{{$job->exam->id}}">Take Exam</a>
	          </div>
        </div>

 	@endforeach
        </div>
@endsection