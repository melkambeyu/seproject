<!DOCTYPE html>
<html>
<head>
	<title>Applicant Panel</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="/css/app_style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="navbar-fixed">
        <ul id="dropdown1" class="dropdown-content">
            <li>
                <a href="{{ url('/applicant/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/applicant/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        
        <nav class="#004d40 teal">
          <div class="nav-wrapper ">
                <a href="{{ url('/applicant') }}" class="brand-logo" href="{{ url('/applicant') }}">
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
                            {{ Auth::guard('applicant')->user()->firstName }}
                            {{ Auth::guard('applicant')->user()->lastName }}
                        </a>
                     </div>
                        
                    </li>
    
                        
                @endif
                    </ul> <!-- end of right navbar -->

          </div>
        </nav>
     </div> <!-- end of navBar fixed -->
     <div class="row">
        <div class="col s3">
          <ul class="collection with-header">
            <li class="collection-header"><h4>Applicant Panel</h4></li>
            <a href="/applicant/home" class="collection-item @if($page == 'home') active @endif ">Jobs</a>
            <a href="/applicant/notification" class="collection-item @if($page == 'notify') active @endif ">@if(count($notes))
            <span class="new badge green">{{count($notes)}}</span>@endif Notifications</a>
            <a href="/applicant/exams" class="collection-item @if($page == 'exam') active @endif ">Take Exam</a>
            <a href="/applicant/applications" class="collection-item @if($page == 'apply') active @endif ">Applications</a>
          </ul>
        </div> <!-- end of col s3 -->
        <div class="col s9 main_body">

    @yield('content')

        </div>
     </div>
     </body>
<script src="/js/jquery.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/appli.js"></script>
</body>
</html>