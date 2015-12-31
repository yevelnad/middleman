@extends('main')
@section('css')
<link rel="stylesheet" href="/css/transaction.css" media="screen" title="no title" charset="utf-8">
@endsection
@section('scrollspy')
<li class="active"><a href="/transaction">Transaction</a></li>
<li><a href="/transaction/create">Create</a></li>
@endsection
@section('content')
    <div class="col-sm-12 transaction">
      <div class="transaction-content-1">
          <div class="col-sm-2"></div>
          <div class="col-sm-2 section">
              <div class="title">Your active transactions</div>
          </div>
          <div class="col-sm-6 title">

          </div>
      </div>
    </div>
@endsection
