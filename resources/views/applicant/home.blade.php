@extends('applicant.layout.main')

@section('content')
<div class="row">
@foreach($jobs as $job)
  <div class="card col s5 hoverable">
    <div class="card-content">
     @if(!$job->hasApplied($user))
      <span class="new badge green activator" data-badge-caption="More"></span>
     @endif
      <span class="card-title grey-text text-darken-4 truncate"><strong>{{ $job->name }}</strong></span>
      <p>{{ $job->company->name }}</p>
      <p>{{ $job->description }}</p>
   @if($job->hasApplied($user))
      <a class="btn disabled" style="margin-top:10px;">Application Already Sent</a>
   @endif
    </div>
    <div class="card-reveal grey lighten-2">
      <span class="card-title red-text text-darken-4">Description<i class="material-icons right">close</i></span>
      <p>Salrary: {{ $job->salary }}</p>
      <p>Vacancy: {{ $job->vacant }}</p>
      <a class="apply waves-effect waves-light btn btn-small green" href="/applicant/apply/{{ $job->id }}" 
       style="float: right;">Apply</a>
    </div>
  </div>
@endforeach
</div>
@endsection
