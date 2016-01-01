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
    <div class="panel shadow-inset">
        <div class="panel-heading shadow">Created Transactions</div>
        <div class="panel-body">
          @foreach($transactions as $transaction)
          <div class="col-sm-4 panel @if($transaction->status === 1)  panel-info @else panel-danger @endif">
            <div class="panel-heading">
                <div>Created At: {{$transaction->created_at}}</div>
                <div>@if($transaction->status === 1)  Status:Ok @else Status: Recipient needs to verify your transaction. @endif</div>
            </div>
            <div class="panel-body">
              <table class="table">
                <td>
                  <tr>
                    <b>Name:</b>
                  </tr>
                  <tr>
                    {{$transaction->name}}
                  </tr>
                </td>
              </table>
              <table class="table">
                <td>
                  <tr>
                    <b>Recipient:</b>
                  </tr>
                  <tr>
                    {{$transaction->recipient}}
                  </tr>
                </td>
              </table>
              <table class="table">
                <td>
                  <tr>
                    <b>Description:</b>
                  </tr>
                  <tr>
                    {{$transaction->description}}
                  </tr>
                </td>
              </table>
              <table class="table">
                <td>
                  <tr>
                    <b>Reward:</b>
                  </tr>
                  <tr>
                    {{$transaction->reward}}.00 pesos
                  </tr>
                </td>
              </table>
            </div>
          </div>
          @endforeach
        </div>
    </div>








</div>
@endsection
