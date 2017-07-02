@extends('applicant.layout.main')
@section('content')
	<div class="hold">
@if(!count($applys))
	<h2> No Applications Send!!</h2>
@else
	<table class="striped highlight">
        <thead>
          <tr>
              <th>Job Name</th>
              <th>Company</th>
              <th>Application Date</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($applys as $apply)
          <tr>
            <td>{{ $apply->name }}</td>
            <td>{{ $apply->company->name }}</td>
            <td>{{ date("F J, Y", $apply->updated_at->timestamp )}}</td>
            <td><span class="red-text">Delete</span></td>
          </tr>
         @endforeach
        </tbody>
      </table>
@endif
     </div>
@endsection