<!DOCTYPE html>
<html ng-app="MiddlemanApp" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bevan" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Hammersmith+One" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Andada" />
    <!-- Bootstrap -->
    <link href="/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css" media="screen" title="no title" charset="utf-8">
    @yield('css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Angular javascript -->
  </head>
  <body>

    <!-- Static navbar -->
    <div class="top">
      <!-- Navigation -->
  <nav class="navbar  navbar-fixed-top" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar button-icon"></span>
                  <span class="icon-bar button-icon"></span>
                  <span class="icon-bar button-icon"></span>
              </button>
              <a class="navbar-brand" href="/"><img src="/middleman.png" alt="" class="logo" /></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  @yield('scrollspy')
              </ul>
              <ul class="nav navbar-nav navbar-right">
@if(!Auth::check())
                  <li class="@yield('active-login')" id="">
                      <a href="/user/login">Sign In</a>
                  </li>
                  <li class="@yield('active-register')" id="">
                      <a href="/user/register">Sign Up</a>
                  </li>
@else
                  <li>
                      <a href="">{{Auth::user()->name}}</a>
                  </li>
                  <li><a href="/user/logout">Logout</a></li>
@endif
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

<!---login modal-->

<!--end login modal -->

      </div>
    <div class="content" id="home">
      @yield('content')
    </div>

    <footer class="footer">
      <div class="col-sm-12 footer">
        <div class="col-sm-12">powered by:</div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <img src="/image/laravel.png" alt="" /> <img src="/image/bootstrap.png" alt="" /> <img src="/image/heroku.png" alt="" />
        </div>
        <div class="col-sm-4"></div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap-3.3.6/js/bootstrap.min.js"></script>

    <!--change angular curly brackets-->

    </script>
  </body>
</html>
