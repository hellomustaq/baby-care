<?php

use Illuminate\Http\Request;
use Validator;
use App\Children;
use App\Token;
use App\User;
use Auth;

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
    return view('landing');
});

Route::get('landing',function(){
    return view('layouts.master');
});

Route::get('addChildren',function(){
    $userId=Auth::user()->id;
    $child=User::find($userId);$childrens=$child->childern();
    return view('users.addChildren')->with('childrens',$childrens);
})->name('addChildren');
Route::post('/children/add','UserController@insertChildren')->name('insertChildren')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::POST('regUser','HomeController@regUser')->name('regUser');
Route::get('/logout', 'HomeController@logout')->name('logout');
