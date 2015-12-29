<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap-3.3.6/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css" media="screen" title="no title" charset="utf-8">
    @yield('css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
              <a class="navbar-brand" href="/"><img src="{{asset('middleman.png')}}" alt="" class="logo" /></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="login">
                      <button type="button" class="login" name="button" data-toggle="modal" data-target=".bs-example-modal-sm">Sign In</button>
                  </li>
                  <li class="register">
                      <a href="/user/register">Sign Up</a>
                  </li>

              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

<!---login modal-->

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form class="login" action="/user/login" method="post">

        <div class="form-group">
          <label for="name">Username:</label>
          <input type="text" name="name" value="" class="form-control">
        </div>

        <div class="fomr-group">
          <label for="password">Password:</label>
          <input type="password" name="name" value="" class="form-control">
        </div>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <br />
          <input type="submit" name="login" value="sign in" class="btn btn-primary">

      </form>
    </div>
  </div>
</div>
<!--end login modal -->

      </div>
    <div class="content">
      @yield('content')
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
  </body>
</html>
