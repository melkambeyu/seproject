<form id="q_form" action="/company/question/{{$exam}}" method="POST">
  {{csrf_field()}}
    <div class="input-field col s12">
      <input id="question_nq" type="text" name="question" autofocus>  
      <label for="question_nq">Question</label>
    </div>
    <div class="input-field col s6">
      <input id="choices.0_nq" type="text" name="choices[]">
      <label for="choices.0_nq">Choice A</label>
    </div>
    <div class="input-field col s6">
      <input id="choices.1_nq" type="text" name="choices[]">
      <label for="choices.1_nq">Choice B</label>
    </div>
    <div class="input-field col s6">
      <input id="choices.2_nq" type="text" name="choices[]">
      <label for="choices.2_nq">Choice C</label>
    </div>
    <div class="input-field col s6">
      <input id="choices.3_nq" type="text" name="choices[]">
      <label for="choices.3_nq">Choice D</label>
    </div>
    <div class="input-field col s8">
        <select id="right_answer_nq" name="right_answer">
          <option value="" disabled selected>Choose The Right Answer</option>
          <option value="0">Option A</option>
          <option value="1">Option B</option>
          <option value="2">Option C</option>
          <option value="3">Option D</option>
        </select>
        <label>Right Answer</label>
    </div>
      <div class="col s12 loader"></div>
    </div>
</form>