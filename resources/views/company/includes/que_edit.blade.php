<div id="edit_modal" class="modal animated slideInUp" style="height: 150%;">
    <div class="modal-content">
        <div class="row">
          <h5 class="col s8">Edit Question</h5>
              <form id="question_edit_form" action="{{ route('questions.update',$question->id) }}" method="POST">
               {{ csrf_field() }}
                <div class="input-field col s10">
                  <input id="question_eq" type="text" name="question"">
                  <!-- <label for="question">Write the Question</label> -->
                </div>

                <div class="input-field col s5">
                  <input id="a" type="text" name="choices[]">
                  <!-- <label for="choice_a">Choice A</label> -->
                </div>
                <div class="input-field col s5">
                  <input id="b" type="text" name="choices[]">
                  <!-- <label for="choice_b">Choice B</label> -->
                </div>
                <div class="input-field col s5">
                  <input id="c" type="text" name="choices[]">
                  <!-- <label for="choice_c">Choice C</label> -->
                </div>
                <div class="input-field col s5">
                  <input id="d" type="text" name="choices[]">
                  <!-- <label for="choice_d">Choice D</label> -->
                </div>

                <div class="input-field col s8">
                <select id="right_answer_eq" name="right_answer">
                  <option value="" disabled selected>Choose The Right Answer</option>
                  <option value="0">Option A</option>
                  <option value="1">Option B</option>
                  <option value="2">Option C</option>
                  <option value="3">Option D</option>
                </select>
                <label>Right Answer</label>
              </div>
                    <div class="col s8 offset-s1" style="margin-top: 0.2em;">
                         <button id="que_save" class="btn waves-effect waves-light" type="submit">
                                Submit
                        </button>
                  </div>
                  <div class="loader"></div>
              </form> 
          </div>
      </div>       
          </div>