@extends('main')
@section('scrollspy')
<li><a href="/transaction">Transactions</a></li>
@endsection
@section('css')
<link rel="stylesheet" href="/css/user-dashboard.css" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="dash col-sm-12">
    <div class="col-sm-1"></div>
    <div class="col-sm-3 side-nav">


      <div class="col-sm-12 tag-content">
          <div class="title col-sm-12">Latest Transaction Tags</div>
        <div class="tags col-sm-12">
          <button class="tag">#rohan online</button><button class="tag">#danlevey</button>
          <button class="tag">#clash of clans</button>
          <button class="tag">#danlevey</button>
          <button class="tag">#danlevey</button>
          <button class="tag">#danlevey</button>
        </div>
      </div>

    </div>
    <div class="col-sm-7 dashboard-content">

        <div class="col-sm-12 latest-transactions">
            <div class="title col-sm-12">Want to earn? Apply to become middleman in this transactions.</div>
        </div>
    </div>
</div>
@endsection
