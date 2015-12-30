<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
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
    public function makeSingup(LoginRequest $request){
      return redirect('/user/login');
    }
}
