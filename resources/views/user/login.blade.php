@extends('main')

@section('title')
login
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/form.css', false)}}" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="col-sm-4">

</div>
<div class="col-sm-4">
  <div class="title">
    <span class="glyphicon glyphicon-user"></span>   User Login
  </div>
  <div class="form-content">
    <form class="" action="/user/login" method="post">

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
        <input type="submit" name="login" value="login" class="btn btn-primary">

    </form>
  </div>
</div>
<div class="col-sm-4">

</div>
@endsection
