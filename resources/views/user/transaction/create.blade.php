@extends('main')
@section('css')
<link rel="stylesheet" href="/css/transaction.css" media="screen" title="no title" charset="utf-8">
@endsection
@section('scrollspy')
<li><a href="/transaction">Transaction</a></li>
<li class="active"><a href="/transaction/create">Create</a></li>
@endsection
@section('content')
  <div class="col-sm-12 transaction">
      <div class="transaction-content-1 col-sm-12">
          <div class="col-sm-3"><p class="tips">
              @if(count($errors) > 0)
                  @foreach($errors->all() as $error)
                  {{$error}}
                  @endforeach
              @endif
          </p></div>
          <div class="col-sm-6 create-form">
              <p>Create A transaction</p>
              <form class="" action="/transaction/create" method="post">
                <label for="">Recipient's Username:</label>
                <input type="text" name="recipient" value="" placeholder="{{$errors->first('recipient')}}">
                <label for="">Transaction Name:</label>
                <input type="text" name="name" value="" placeholder="{{$errors->first('name')}}">
                <label for="">Description:</label>
                <textarea name="description" rows="5" placeholder="{{$errors->first('description')}}"></textarea>
                <label for="">Reward:</label>
                <input type="number" name="reward" value="" placeholder="{{$errors->first('reward')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" name="create" value="create" class="button">
              </form>
          </div>
          <div class="col-sm-3"></div>
      </div>
  </div>
@endsection
