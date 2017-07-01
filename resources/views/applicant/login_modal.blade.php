<div id="applicant_login_modal" class="modal animated bounceInUp" >
    <div id="applicant_login_body" class="modal-content">
          <div class="row" style="margin: 20px 0px;">
            <form id="applicant_login_form" role="form" method="POST" action="{{ url('/applicant/login') }}">
                    {{ csrf_field() }}
                <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s10 offset-s1">
                    <label for="email_app">e-mail</label>
                    <input id="email_app" type="email"  name="email" value="{{ old('email') }}" autofocus>
                    <!-- <div id="error_app"></div> -->
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s10 offset-s1">
                    <label for="password_app">password</label>
                        <input id="password_app" type="password" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col s6 offset-s1">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>

                <div class="col s10 offset-s1" style="margin-top: 1.8em;">
                    <button style="width: 100%" class="btn waves-effect waves-light" id="applicant_login_btn" type="submit">
                            Login
                            <!-- <i class="material-icons prefix">send</i> -->
                    </button>
                    
                </div>
                <div class="col s04 offset-s3" style="margin-top: 1em;">
                <a class="waves-effect waves-teal btn-flat" href="{{ url('/applicant/password/reset') }}">
                    Forgot Your Password?</a></div>
                <div class="col s12 loader"></div>
            </form>
    </div>

    </div>
    
</div>