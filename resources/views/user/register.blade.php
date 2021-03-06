@extends('main')
@section('title')
Regiter here!
@endsection
@section('active-register')active @endsection
@section('css')
<link rel="stylesheet" href="/css/register.css" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
  <div class="col-sm-12 register">
    <div class="col-sm-7 register-text">
      <div class="col-sm-12">
        <div class="col-sm-4"><h1><p class="register-content"><span class="glyphicon glyphicon-ok"> </span> SignUp </p></h1></div>
        <div class="col-sm-4"><h1><p class="register-content"><span class="glyphicon glyphicon-ok"> </span> Search </p></h1></div>
        <div class="col-sm-4"><h1><p class="register-content"><span class="glyphicon glyphicon-ok"> </span> Trust </p></h1></div>
        <div class="col-sm-12">
          <h1><p class="register-content"><span class="glyphicon glyphicon-thumbs-up"> </span> Earn by becoming a middleman</p></h1>
        </div>
        <div class="col-sm-12">
          <p class="white">We don't recommend it for bigger transactions.</p>
        </div>
      </div>

    </div>
    <div class="col-sm-4 register-form">
      <div class="title">Sign Up:</div>
      <form class="" action="/user/register" method="post">
        <input type="text" name="name" value="" placeholder="username: {{$errors->first('name')}}" ng-model="Username">
        <input type="email" name="email" value="" placeholder="email: {{$errors->first('email')}}">
        <input type="password" name="password" value="" placeholder="password: {{$errors->first('password')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="register" value="SignUp" class="button">
      </form>
    </div>
  </div>

<div class="col-sm-12">
  <div class="col-sm-3"></div>
  <div class="col-sm-6 disclaimer">
    Disclaimer: We dont held responsible for any loss. Be warry in doing transactions. This app is just a tracker of transactions using middleman.
  </div>
  <div class="col-sm-1"></div>

</div>
@endsection
