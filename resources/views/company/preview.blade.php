@extends('company.layout.main')
@section('content')
      @if(empty($questions))
        <h2 class="no_que" style="font-style: italic;">No Questions Yet!!</h2>
      @else
      <?php $q=1; $c=1; ?> 
        @foreach($questions as $question)
        <div id="pad{{$q}}" class="pad">
            <div class="question">
              <span><strong style="margin-right: 7px;">{{$q}}</strong>{{ $question->question }}</span>
              <span class="new badge" data-badge-caption="Click"></span>
            </div>
            <div class="row choice">

            @foreach($question->choices as $choice)
                  <input class="with-gap" id="choice{{$c}}" name="group1" type="radio"/>
                  <label class="col s6"><span><strong>{{ $choice }}</strong></span></label>
                  <?php $c++; ?>
            @endforeach

            </div>
          <div class="buttons hidden">
            <a class="waves-effect waves-light btn green que_edit" data-target="edit_modal" href="{{ route('questions.edit', $question->id)}}" data-action="{{route('questions.update', $question->id)}}">Edit
            </a>
            <a class="waves-effect waves-light btn red que_delete" href="{{ route('questions.destroy', $question->id) }}">Delete</a>
            
          </div>

        </div>
        <div class="divider"></div>
        <?php $q++;?> 

        @endforeach
  
    @include('company.includes.que_edit')
          
        </div>
    </div>   
    @endif
     <div class="fixed-action-btn ">
        <button id="new_que" class="btn btn-large green z-depth-4" data-target="newQue_modal">
          <span>New Question</span>
        </button>
    </div>
     <div id="newQue_modal" class="modal">
        <div class="modal-content" style="padding: 5px 24px;">
          <h5>New Question</h5>
          <form id="new_que_form" action="/company/question/{{ $ex->id }}" method="POST">
            {{ csrf_field() }}
              <div class="row" style="background-color: white;">
                  <div class="input-field col s12">
                    <input id="que" type="text" name="question">
                    <label for="que">Question</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="a" type="text" name="choices[]">
                    <label for="a">Choice A</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="b" type="text" name="choices[]">
                    <label for="b">Choice B</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="c" type="text" name="choices[]">
                    <label for="c">Choice C</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="d" type="text" name="choices[]">
                    <label for="d">Choice D</label>
                  </div>
                  <div class="input-field col s8">
                      <select name="right_answer">
                        <option value="" disabled selected>Choose The Right Answer</option>
                        <option value="0">Option A</option>
                        <option value="1">Option B</option>
                        <option value="2">Option C</option>
                        <option value="3">Option D</option>
                      </select>
                      <label>Right Answer</label>
                  </div>

                  <div class="col s8 offset-s1" style="margin-top: 0.5em;">
                     <button id="que_save" class="btn waves-effect waves-light" type="submit">
                            Submit
                            <!-- <i class="material-icons right">send</i> -->
                    </button>
                </div>
                <div class="col s12 loader"></div>
              </div>
          </form>
        </div>
      
      </div>
@endsection
@section('script')
<script src="/js/jquery.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/company.js"></script>
<script src="/js/ques.js"></script>

<script>
  $('#jobs, #applicants').remove();
              
  $('#exams').addClass('orange').html('<span><strong>Questions</strong></span>')
</script>
@endsection
