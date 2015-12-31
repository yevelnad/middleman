<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Transaction;
use App\Http\Requests\TransactionRequest;
use App\Http\Controllers\Controller;

class TransactionCOntroller extends Controller
{
    public function __construct()
    {
      $this->user = Auth::user();
    }
    public function index()
    {
      return view('user.transaction.index');
    }

    public function create()
    {
      return view('user.transaction.create');
    }

    public function save(TransactionRequest $request)
    {
      $transaction = new Transaction($request->all());
      $transaction->status = true;
      $this->user->transaction()->save($transaction);
    }
}
