@foreach($jobs as $job)
<div class="row">
      <div class="col s12 m5">
        <div class="card-panel">
          <span class="">
          {{$job->name}} <br>
          {{$job->descrip}}
          </span>
        </div>
      </div>
    </div>
@endforeach