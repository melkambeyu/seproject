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
    <link rel="stylesheet" type="text/css" href="/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">

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
        
        <nav class="#4a148c purple darken-4">
          <div class="nav-wrapper ">
                <a href="{{ url('/company') }}" class="brand-logo" href="{{ url('/company') }}">
                    {{ config('app.name', 'Laravel Multi Auth Guard') }}
                </a>
        <!-- display the right-side of navBar -->
                <ul class="right hide-on-med-and-down">
                @if (Auth::guest())
                    <li><a href="{{ url('/company/login') }}">Login</a></li>
                    <li><a href="{{ url('/company/register') }}">Register</a></li>
                @else
                    <li>
                        <a class="dropdown-button" href="#!" data-beloworigin="true" data-induration="200"
                        data-outduration="150" data-activates="dropdown1">{{ Auth::user()->name }}</a>
                    </li>
    
                        
                @endif
                    </ul> <!-- end of right navbar -->

          </div>
        </nav>
     </div>

                
         
    @yield('content')

    <!-- Scripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>
