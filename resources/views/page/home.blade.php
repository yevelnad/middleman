@extends('main')
@section('title')
MiddleMan Home
@endsection
@section('home-active')active
@endsection
@section('scrollspy')
  <li><a href="#home">Home</a></li>
  <li><a href="#earn">Earn</a></li>
@endsection
@section('css')
<link rel="stylesheet" href="/css/home.css" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')

<div class="home-content col-sm-12">
  <div class="text-content">

      <div class="col-sm-12"><h1><font class="indent">Tired</font> of being <font class="indent">Scammed?</font></h1></div>

      <div class="col-sm-12">
        <h1><font class="middleman">
          <div class="col-sm-3"></div>
          <div class="col-sm-2">MID</div> <div class="col-sm-2">D<span class="glyphicon glyphicon-ok"></span>E</div>
          <div class="col-sm-2">MAN</div>
          <div class="col-sm-3"></div>
        </font></h1>
      </div>
      <div class="col-sm-12"><h1>on the</h1></div>
      <div class="col-sm-12"><h1><font class="indent">Rescue</font></h1></div>


  </div>

</div>
<div class="col-sm-12 steps">
<div class="find col-sm-3">
  <button type="button" name="button" class="mid">1. Sign Up</button>
</div>
<div class="find col-sm-1">
  <button type="button" name="button" class="arrow"><span class="glyphicon glyphicon-arrow-right"></span></button>
</div>

<div class="find col-sm-4">
  <button type="button" name="button" class="mid">2. Post transaction</button>
</div>
<div class="find col-sm-1">
  <button type="button" name="button" class="arrow"><span class="glyphicon glyphicon-arrow-right"></span></button>
</div>

<div class="find col-sm-3">
  <button type="button" name="button" class="mid">3. Trust Middleman</button>
</div>
</div>
<hr />
<div class="home-earn col-sm-12" id="earn">
  <div class="title col-sm-12"><h1> Want to earn? Why not become a middleman.</h1></div>
  <div class="col-sm-12 become-content">
    <section class="col-sm-4">
      <h3><span class="glyphicon glyphicon-ok"></span> Sign Up</h3>
        Join us and with super easy registration you will not waste your time with something unemportant.
    </section>
    <section class="col-sm-4">
      <h3><span class="glyphicon glyphicon-ok"></span> Do transactions</h3>
        Find transactions and apply. Write why you need to be trusted. Set payment amount  and your done.
    </section>
    <section class="col-sm-4">
      <h3><span class="glyphicon glyphicon-ok"></span> Build Reputation</h3>
        For every successfull transactions you gain reputation. The more reputation the more people trust you.
    </section>

  </div>
</div>
<div class="col-sm-12">
  <div class="title col-sm-12"><h1>Search Middleman</h2></div>
</div>
@endsection
