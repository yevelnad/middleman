<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest', ['except' => ['logout']]);
    }
    public function form()
    {
      return view('user.login');
    }
    public function modalLogin(Request $request)
    {
      $validator = Validator::make($request->all(), [
            'name' => 'required|alphanum',
            'password' => 'required|alphanum',
        ]);

        if ($validator->fails()) {
            return redirect('user/login')
                        ->withErrors($validator);
        }
    }

    public function makeLogin(LoginRequest $request){
        $name = $request->input('name');
        $password = $request->input('password');
        if (Auth::attempt(['name' => $name, 'password' => $password])){
          return response('<center>Login Succesfully. You will be redirected automatically. Click <a href="/"> here</a> if not.',302)->header('refresh','2;url=/');
        }
        return back()->with('message','You seem to have provided wrong credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return response('<center>Successfully Logout</center>', 302)->header('refresh','2;url=/');
    }
}
