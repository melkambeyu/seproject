@extends('applicant.layout.main')
@section('content')
 <div class="container">
 	@foreach($jobs as $job)
 	<div class="row">
		<div class="card-panel col s5">
	          <span class="truncate">{{ $job->exam->job->name }} </span>
	          <p>{{ $job->exam->title }}</p>
	          <a class="waves-effect waves-light btn btn-small align-center green" href="/applicant/take/{{$job->exam->id}}">Take Exam</a>
        </div>
        </div>

 	@endforeach
 </div>
@endsection