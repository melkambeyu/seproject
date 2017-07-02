@if( !count($jobs))
  <h2 style="font-style: italic; margin: 5% 5%;">No Vancant Jobs!!</h2>
@else
  @foreach($jobs as $job)
 <div class="col s6">
       <div class="card horizontal z-depth-2 hoverable">
         <div class="card-stacked">
           <div class="card-content">
             <h5 class="truncate" style="width: 400px;">{{ $job->name }}</h5>
             <span class="truncate" style="width: 400px;">{{ $job->description }}</span>
           </div>
           <div class="card-action">
             <button style="padding: 0px 15px;" class="waves-effect waves-green btn-flat orange-text" href="/company/job/{{ $job->id }}">Show Applicants</button>
            @if(!count($job->exam)) 
             <a class="waves-effect waves-green btn-flat red-text animated infinite flash juju new_exam" href="{{$job->id}}" data-target="exam_modal" style="float: right;"><strong>Create Exam</strong></a>

             @else
              <a class="waves-effect waves-green btn-flat" href="{{ route('exams.show', $job->exam->id) }}" target="_blank" style="float: right;">Show Exam</a>
            @endif
           </div>
         </div>
       </div>
 </div>
 @endforeach
@endif
  <div class="fixed-action-btn">
    <a id="new_job" class="btn btn-large green z-depth-4" data-target="job_modal" >
      <span>Add Job</span>
    </a>
</div>
<div id="job_modal" class="modal animated zoomIn">
    <div class="modal-content">
      <form id="job_form" action="{{ route('jobs.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="input-field ">
          <input id="job" type="text" name="name" autofocus>
          <label for="job">Job Title</label>
        </div>

        <div class="input-field ">
          <textarea id="description" name="description" class="materialize-textarea"></textarea>
          <label for="description">Job Description</label>
        </div>
        <div class="" style="margin-top: 1.8em;">
                 <button style="width: 100%;" id="job_save" class="btn waves-effect waves-light" type="submit">
                        Submit
                        <!-- <i class="material-icons right">send</i> -->
                </button>
        <div class="loader"></div>
          </div>
      </form>
    </div>
</div>

<div id="exam_modal" class="modal">
  <div class="modal-content">
  <div class="row">
      <form method="POST">
        {{ csrf_field() }}
        <div class="col s3">
              <img src="/img/exam_girl.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
        </div>
        <div class="input-field col s5 offset-s1">
            <input id="exa_title" type="text" name="title" autofocus>
            <label for="exa_title">Exam Title</label>
        </div>
        <div class="input-field col s6 offset-s1">
          <input class="btn waves-effect waves-light" type="submit" value="Create Exam">
        </div>
      </form>
      <div class="loader"></div>
  </div>
  </div>
</div>