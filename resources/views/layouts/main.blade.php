<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="navbar-fixed">
        <ul id="dropdown1" class="dropdown-content">
            <li>
                <a href="{{ url('/company/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/company/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li>
                <a class="applicant_login" data-target="applicant_login_modal">Applicant</a>
            </li>
            <li>
                <a class="company_login" data-target="company_login_modal">Company</a>
            </li>
        </ul>

         <ul id="dropdown3" class="dropdown-content">
            <li>
                <a class="applicant_register" data-target="applicant_register_modal">As Applicant</a>
            </li>
            <li>
                <a class="company_register" data-target="company_register_modal">As Company</a>
            </li>
        </ul>
        
        <nav class="#004d40 teal darken-4">
          <div class="nav-wrapper ">
                <a href="{{ url('/company') }}" class="brand-logo" href="{{ url('/company') }}">
                    <!-- <i class="material-icons prefix">phone</i> -->
                    {{ config('app.name', 'Laravel Multi Auth Guard') }}
                </a>
        <!-- display the right-side of navBar -->
                <ul class="right hide-on-med-and-down">
                @if (Auth::guest())
                    <li>
                        <a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="dropdown2"
                        data-induration="200" data-outduration="150">Login</a>
                    </li>
                    <li><a class="dropdown-button" href="#1" data-constrainwidth="false" data-induration="200"
                        data-outduration="150" data-beloworigin="true" data-activates="dropdown3">Sign Up</a>
                    </li>
                @else
                    <li>
                    <div class="chip">
                      <a class="dropdown-button black-text" href="#!" data-beloworigin="true" data-induration="200"
                        data-outduration="150" data-activates="dropdown1">
                        @if (Auth::guard('company')->user())
                            {{ Auth::guard('company')->user()->name }}
                        @elseif(Auth::guard('applicant')->user())
                            {{ Auth::guard('applicant')->user()->firstName }}
                            {{ Auth::guard('applicant')->user()->lastName }}

                        @endif
                        </a>
                     </div>
                        
                    </li>
    
                        
                @endif
                    </ul> <!-- end of right navbar -->

          </div>
        </nav>
     </div> <!-- end of navBar fixed -->

     @include('company.login_modal')
     @include('company.register_modal')
     @include('applicant.login_modal')
     @include('applicant.register_modal')

         
    @yield('content')

    <!-- Scripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>
