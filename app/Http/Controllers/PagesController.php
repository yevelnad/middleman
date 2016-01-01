<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Transaction;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{
    public function __construct()
    {
      $this->middleware('web');
      $this->user = Auth::user();
    }
    public function home()
    {
      if(Auth::check()){
        return view('user.dashboard.index',['transactions' => Auth::user()->transaction]);
      }
      return view('page.home');
    }
}
