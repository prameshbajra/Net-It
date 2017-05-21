<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

// Route::group(
// ['middleware' => ['web']],function(){
//     Route::post("/signUp",[
//     'uses' => 'UserController@postSignUp',
//     'as' => 'signUp'
//     ]);
//  Group ma yo duita sangai hunu parrney raixa ...
//      Route::get('/', function () {
//      return view('pages.index');
//      });
// }
// );

// Mathi ko satta mero version ...
Route::post(
"/signUp",
"UserController@postSignUp"
)->name("signUp");