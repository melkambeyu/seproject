<div id="applicant_register_modal" class="modal animated slideInDown">
    <div id="applicant_register_body" class="modal-content">
    <div class="row">
       <form id="applicant_register_form" role="form" method="POST" action="{{ url('/applicant/register') }}">
          {{ csrf_field() }}
           <div class="input-field col s5 offset-s1">
               <input type="text" name="firstName" id="firstName_apr" autofocus>
               <label for="firstName">First Name</label>
           </div>

           <div class="input-field col s5 ">
               <input type="text" name="lastName" id="lastName_apr">
               <label for="lastName">Last Name</label>
           </div>

           <div class="input-field col s5 offset-s1">
               <input type="email" name="email" id="email_apr">
               <label for="email">e-mail</label>
           </div>
           <div class="input-field col s5">
               <select id="sex_apr" name="sex" >
                 <option value="" disabled selected>Choose your Gender</option>
                 <option value="male">Male</option>
                 <option value="female">Female</option>
               </select>
               <label>Sex</label>
             </div>

           <div class="input-field col s10 offset-s1">
               <input type="password" name="password" id="password_apr">
               <label for="password">password</label>
           </div>

           <div class="input-field col s10 offset-s1">
               <input type="password" name="password_confirmation" id="pass_confirm_apr">
               <label for="pass_confirm">Confirm password</label>
           </div>
           <div class="col s10 offset-s1">
               <button id="applicant_register_btn" style="width: 100%; margin-top: 1.8em;" class="btn waves-effect waves-light" >
                   Sign Up
               </button>
           </div>
        <div class="col s10 offset-s1 loader"></div>

       </form>
    </div>
</div>
</div>