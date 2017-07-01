<div id="company_login_modal" class="modal animated bounceInUp" >
    <div id="company_login_body" class="modal-content">
          <div class="row" style="margin: 0px 0px;">
            <form id="company_login_form" role="form" method="POST" action="{{ url('/company/login') }}">
                    {{ csrf_field() }}
                <div class="input-field col s10 offset-s1">
                    <label for="email">e-mail</label>
                    <input id="email" type="email"  name="email" value="{{ old('email') }}" autofocus>
                    <div id="error"></div>
                </div>

                <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s10 offset-s1">
                    <label for="password">password</label>
                        <input id="password" type="password" name="password" 
  >

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>


                <div class="col s10 offset-s1" style="margin-top: 1.8em;">
                    <button style="width: 100%" class="btn waves-effect waves-light" id="company_login_btn" type="submit">
                            Login
                            <!-- <i class="material-icons prefix">send</i> -->
                    </button>
                    
                </div>
                <div class="col s04 offset-s3" style="margin-top: 1em;">
                <a class="waves-effect waves-teal btn-flat" href="{{ url('/company/password/reset') }}">
                    Forgot Your Password?</a></div>
                <div class="col s12 loader"></div>
            </form>
    </div>

    </div>
    
</div>