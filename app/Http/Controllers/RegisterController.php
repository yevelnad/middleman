<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest');
    }
    public function form()
    {
      return view('user.register');
    }
    public function makeRegister(RegisterRequest $request)
    {
      $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
      ]);
      $user->save();
      $message = 'Successfully Create an account! You will be redirected to the login page. Click <a href="/user/login">here</a> if not.';
      return response($message,302)->header('refresh','2;url=/user/login');
    }
}
