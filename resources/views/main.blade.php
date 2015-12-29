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
    <nav class="col-sm-12">
      <ul class="nav nav-pills">
        <div class="col-sm-9">
          <li role="presentation" class="middleman"><a href="/"><img src="{{asset('middleman.png')}}" class="middleman"/></a></li>
        </div>
        <div class="col-sm-3">
          <ul class="user-reg-log col-sm-12">
            <li class="col-sm-4"></li>
            <li role="presentation" class="login col-sm-4"><span class="glyphicon glyphicon-user"></span><a href="/user/login"> Login</a></li>
            <li role="presentation" class="register col-sm-4"><a href="/user/register">Register</a></li>
          </ul>
        </div>
      </ul>
    </nav>

    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
  </body>
</html>
