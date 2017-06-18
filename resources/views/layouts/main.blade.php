<!DOCTYPE html>
<html>
<head>
    <title>SiraFelagi</title>
    <link rel="stylesheet" type="text/css" href="/css/materialize.css">
    <style>
        .naver{
            width: 95%;
            margin: auto;
        }
        #side-bar{
            width: 15%;
            float: left;
            padding-bottom: 100%;
        }
        .lie{
          padding: 7px 5px 0px 7px;
        }
        .main{
          width: 85%
          float: right;
        }
    </style>
</head>
<body>
    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Profile</a></li>
  <li><a href="#!">Logout</a></li>
</ul>
<div class="navbar-fixed">
  <nav class="#1a237e indigo darken-3">
    <div class="nav-wrapper naver">
      <a href="#!" class="brand-logo">SiraFelagi</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="#">Sass</a></li>
      <li><a href="#">Components</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="dropdown1">Dropdown</a></li>
    </ul>
  </div>
</nav>
</div>
  
    <div id="side-bar" class="#e8eaf6 indigo lighten-5 fixed">
        <ul>
            <li class="lie">Jobs<br><br></li>
            <li class="divider"></li>
            <li class="lie">Exams <span class="new badge green">2</span><br><br></li>
            <li class="divider"></li>
            <li class="lie">Answers<br><br></li>
            <li class="divider"></li>
            <li class="lie">Contact Info<br><br></li>
        </ul>
    </div>

  <div class="main">
    @yield('content')
  </div>

<script src="/js/jquery.js"></script>
<script src="/js/materialize.js"></script>
</body>
</html>