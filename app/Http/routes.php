<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'PagesController@home');
/*
/--------------------------------------------------------------------------
/ url = /user; /user/login
/--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'user', 'middleware' => ['web']], function() {
  Route::get('/login', 'LoginController@form');
  Route::post('/login', 'LoginController@makeLogin');
  Route::post('/modal-login', 'LoginController@modalLogin');
  Route::get('/register', 'RegisterController@form');
  Route::post('/register', 'RegisterController@makeRegister');
  Route::get('/logout', 'LoginController@logout');
} );
Route::group(['prefix' => 'transaction', 'middleware' => ['web','auth']], function(){
  Route::get('/', 'TransactionController@index');
  Route::get('/create', 'TransactionController@create');
  Route::post('/create', 'TransactionController@save');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
