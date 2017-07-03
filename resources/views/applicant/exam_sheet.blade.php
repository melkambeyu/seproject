@extends('applicant.layout.main')
@section('content')
<div class="row" style="border: thin solid rgb(220,220,220);">
	<div class="col s12 header">
		<span class="truncate">Exam Sheet for {{$questions[0]->exam->job->name}}</span>
	</div>
 <?php $q= $questions->currentPage() ?>
 @foreach($questions as $question)
	<div class="col s8 que">
	<span style="margin-right: 15px; font-size: 1.5em;">{{$q}}.</span>	<span style="font-size: 1.5em;">{{ $question->question}}</span>
	</div>
	<form id="exam_form" action="/applicant/{{$exam->id}}/mark" method="POST">
		{{ csrf_field()}}
		<input type="hidden" name="question_id" value="{{$question->id}}">
		<div class="input-field col s8 offset-s1 choice">
			<input type="radio" value="0" name="answer[]" id="a">
			<label for="a">{{ $question->choices[0] }}</label>
		</div>
		<div class="input-field col s8 offset-s1 choice" >
			<input type="radio" value="1" name="answer[]" id="b">
			<label for="b">{{ $question->choices[1] }}</label>
		</div>
		<div class="input-field col s8 offset-s1 choice" >
			<input type="radio" value="2" name="answer[]" id="c">
			<label for="c">{{ $question->choices[2] }}</label>
		</div>
		<div class="input-field col s8 offset-s1 choice">
			<input type="radio" value="3" name="answer[]" id="d">
			<label for="d">{{ $question->choices[3] }}</label>
		</div>
		 @if($questions->hasMorepages())
		 	<input type="hidden" name="has_next" value="{{$questions->nextPageUrl()}}">
			<div class="next col s4 offset-s4">
				<button id="more" type="submit" class="waves-effect waves-light btn" style="width: 100%;">Next</button>
			</div>
		 @else
			<div class="finish col s4 offset-s4">
				<input type="hidden" name="exam_done" value="true">
				<button id="more" type="submit" class="waves-effect waves green btn" style="width: 100%;">Finish</button>
			</div> 
		 @endif
	</form>

@endforeach
</div>
@endsection