@extends('main')

@section('title')
Regiter here!
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/form.css')}}" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="col-sm-6 register">
  <div class="col-sm-12 betrusted"><h1><p class="indent">Fast</p> and <p class="indent">Simple</p> Registration</h1></div>
  <div class="col-sm-12"><h1><p class="earn">Earn</h1></div>
  <div class="col-sm-12"><h1>for every</h1></div>
  <div class="col-sm-12"><h1><p class="earn">Transaction</p></h1></div>
</div>
<div class="col-sm-6">
    <form class="register" action="/user/login" method="post">

      <div class="form-group">

        <input type="text" name="name" value="" class="register" placeholder="username">
      </div>

      <div class="form-group">

        <input type="text" name="email" value="" class="register" placeholder="email">
      </div>

      <div class="fomr-group">

        <input type="password" name="name" value="" class="register" placeholder="password">
      </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br />
        <input type="submit" name="login" value="login" class="btn">

    </form>

</div>
@endsection
