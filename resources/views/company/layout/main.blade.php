<!DOCTYPE html>
<html>
<head>
  <title>Company Panel</title>
  <link rel="stylesheet" type="text/css" href="/css/materialize.css">
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
  <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div class="row">

      <div class="side_bar col s3">
        <!-- sidebar panel -->
          <div class="logo blue-grey darken-4 grey-text">
              <span><strong>SiraFelagi</strong></span>
          </div>

          <div id="jobs" class="section orange">
              <span>Vacancy</span>
          </div>
          <div id="exams" class="section">
              <span>Exams</span>
          </div>
          <div id="applicants" class="section">
              <span>Applicants</span>
          </div>
          <div id="grades" class="section">
              <span>Exam Results</span>
          </div>
      </div>

    <div class="col s9 nav_holder">
        
        <div class="navbar-fixed">
          
            <nav class="blue-grey darken-3">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
               <div class="nav-wrapper">
              <a class="dropdown-button black-text" href="" onclick="preventDefault()" data-beloworigin="true" data-induration="200"
                data-outduration="150" data-activates="dropdown1">
                <div class="chip">
                  <span class="namo">{{Auth::guard('company')->user()->name}}</span>
                </div>
                        
              </a>              
              </div>
            </ul>
              
            </nav>
            <ul id="dropdown1" class="dropdown-content namo">
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
          </div>  <!-- end of navbar-fixed -->

@yield('content')


  </div> <!-- end of the the right col s9 -->

  </div>

@yield('script')

</body>
</html>