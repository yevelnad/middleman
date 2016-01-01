@extends('main')
@section('scrollspy')
<li><a href="/transaction">Transactions</a></li>
@endsection
@section('css')
<link rel="stylesheet" href="/css/transaction.css" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
<div class="transaction col-sm-12">
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
        <div class="panel shadow-inset">
            <div class="panel-heading shadow">Transaction Tags</div>
            <div class="panel body">
            </div>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="panel shadow-inset">
          <div class="panel-heading shadow">Latest Transactions that need middleman. You can earn here!</div>
          <div class="panel-body">

          </div>
        </div>
    </div>
</div>
@endsection
