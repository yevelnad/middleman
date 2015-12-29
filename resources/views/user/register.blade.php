@extends('main')

@section('title')
Regiter here!
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
  <div class="col-sm-12 register">
    <div class="col-sm-7 register-text">
      <div class="col-sm-12">
        <div class="col-sm-6"><p class="register-content"><span class="glyphicon glyphicon-ok"> </span> Sign Up </p></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5"><p class="register-content"><span class="glyphicon glyphicon-ok"> </span> Trust </p></div>
        <div class="col-sm-12">
          <p class="register-content"><span class="glyphicon glyphicon-thumbs-up"> </span> Earn </p>
        </div>
        <div class="col-sm-12">
          <p class="white"> by becoming a middleman</p>
        </div>
      </div>

    </div>
    <div class="col-sm-5 register-form">
      <form class="" action="index.html" method="post">
        <input type="text" name="name" value="" placeholder="username">
        <input type="email" name="email" value="" placeholder="email">
        <input type="password" name="password" value="" placeholder="password">
        <input type="submit" name="register" value="register" class="button">
      </form>
    </div>
  </div>
<div class="col-sm-12">
  <div class="col-sm-3"></div>
  <div class="col-sm-6 warning">
    Warning: This is not recommended for transactions above 1000.00 pesos. Feel free to do so if 1000.00 pesos is just a small amount for you.
  </div>
  <div class="col-sm-1"></div>

</div>
@endsection
