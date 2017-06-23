    <div class="row" style="margin: 20px 0px;">
            <form role="form" method="POST" action="{{ url('/company/login') }}">
                    {{ csrf_field() }}
                <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s10 offset-s1">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email"  name="email" value="{{ old('email') }}" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s10 offset-s1">
                    <label for="password">Password</label>
                        <input id="password" type="password" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="col s6 offset-s1" style="margin-top: 1em;">
                    <input type="checkbox" name="remember" class="filled-in">
                    <label for="remember"> Remember Me</label>
                </div>

                <div class="col s8 offset-s1" style="margin-top: 1.8em;">
                    <button class="btn waves-effect waves-light" type="submit">
                            Login
                            <!-- <i class="material-icons right">send</i> -->
                    </button>
                    <a class="waves-effect waves-teal btn-flat" href="{{ url('/company/password/reset') }}">
                    Forgot Your Password?</a>
                </div>

            </form>
    </div>
