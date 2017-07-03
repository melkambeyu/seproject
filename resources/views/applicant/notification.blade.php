@extends('applicant.layout.main')
@section('content')
	@if(!count($notes))
	<h2>No Notifications..</h2>

	@else
		<div class="row" style="height: 500px; border: thin solid rgb(130,130,130);">
		@foreach($notes as $note)
			<div class="col s5">
			    <div class="card horizontal" style="margin: 10px 10px !important;">
			      <div class="card-stacked">
			        <div class="card-content">
			    <h5 >Notification from</h5>
			          <p><strong>{{ $note->job->name }}</strong></p>
			          <p>Go to their office for further Interview.</p>
			        </div>
			        <div class="card-action">
			          <a class="ok">Ok</a>
			        </div>
			      </div>
			    </div>
			  </div>
		@endforeach
	  </div>
	@endif
@endsection