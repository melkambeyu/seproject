@if(!count($exams))
  <h2 style="margin: 5% 5%; font-style: italic;">No Exams Created!!</h2>
@else
    @foreach($exams as $exam)
     <div class="col exam_card s4" style="margin-top: 10px;">
           <div class="card horizontal hoverable z-depth-2">
             <div class="card-stacked">
               <div class="card-content">
                 <h5 class="truncate" style="width: 250px;">{{ $exam->job->name }}</h5>
                 <span class="truncate" style="width: 50%;">{{$exam->title}}</span>
               </div>
               <div class="card-action">
                 <a href="{{ route('exams.show', $exam->id) }}" target="_blank">Preview Exam</a>
               </div>
             </div>
           </div>
     </div>
     @endforeach
@endif