@extends('main')

@section('title')
login
@endsection

@section('content')
  <form class="/login" action="/login" method="post">
    <label for="name">Username:</label>
    <input type="text" name="name" value="">
    <label for="password">Password:</label>
    <input type="password" name="name" value="">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="login" value="login">
  </form>
@endsection
