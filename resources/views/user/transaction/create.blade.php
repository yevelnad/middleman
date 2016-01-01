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
      <div class="col-sm-3">
        <div class="col-sm-12 well shadow-inset">
          <ul>
            <li> You must provide your transaction partner's username. Ask your transaction partners username. If your partner is not a member ask him to join. It's just super easy.</li>
            <li> Put the name of transaction. Must be at least 8 characters</li>
            <li> Add description.</li>
            <li> Add a reward.</li>

          </ul>
          <div class="alert-danger">Warning: This is not recommended for 1000.00 pesos transactions and above. The owner of this site is not held responsible for any loss.</div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="panel shadow-inset">
          <div class="panel-heading shadow">Create Transaction</div>
            <div class="panel-body">
              <form class="" action="/transaction/create" method="post">
                <div class="form-group">
                <label for="">Recipient's Username:</label>
                <input type="text" name="recipient" value="" placeholder="{{$errors->first('recipient')}}" class="form-control">
              </div>
                <div class="form-group">
                <label for="">Transaction Name:</label>
                <input type="text" name="name" value="" placeholder="{{$errors->first('name')}}" class="form-control">
              </div>
                <div class="form-group">
                <label for="">Description:</label>
                <textarea name="description" rows="5" placeholder="{{$errors->first('description')}}" class="form-control"></textarea>
              </div>
                <div class="form-group">
                <label for="">Reward:</label>
                <input type="number" name="reward" value="" placeholder="{{$errors->first('reward')}}" class="form-control">
              </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" name="create" value="create" class="btn btn-primary">
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-3"></div>
  </div>
@endsection
