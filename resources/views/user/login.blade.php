@extends('main')

@section('title')
login
@endsection
@section('active-login')active @endsection
@section('css')
<link rel="stylesheet" href="/css/login.css" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="col-sm-12 login">
  <div class="col-sm-2 login-content">
  </div>
  <div class="col-sm-4 login-form">
    <div class="title">Sign In:</div>
    <form class="" action="/user/login" method="post">

      <input type="text" name="name" placeholder="username: {{$errors->first('name')}}">

      <input type="password" name="password" placeholder="password: {{$errors->first('password')}}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="login" value="login" class="button">
    </form>
  </div>
</div>
@endsection
