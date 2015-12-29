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
          <p class="register-content"><span class="glyphicon glyphicon-thumbs-up"> </span> Earn </p><p class="white"> by becoming a middleman.</p>
          <p class="register-content"><span class="glyphicon glyphicon-hand-right"> </span>
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
@endsection
