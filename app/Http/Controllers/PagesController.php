<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct()
    {
      $this->middleware('web');

    }
    public function home()
    {
      if(Auth::check()){
        return view('user.dashboard.index');
      }
      return view('page.home');
    }
}