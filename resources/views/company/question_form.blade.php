<form id="q_form" action="/company/question/{{$exam}}" method="POST">
  {{csrf_field()}}
    <div class="input-field col s12">
      <input id="que" type="text" name="question" autofocus>  
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
      <div class="col s12 loader"></div>
    </div>
</form>