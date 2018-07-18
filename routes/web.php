<?php
//namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Children;
use App\Token;
use App\User;

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
    $child=User::find($userId);$childrens=$child->childern;
    return view('users.addChildren')->with('childrens',$childrens);
})->name('addChildren');

Route::group(['middleware'=>'auth'],function(){
    Route::get('children/{id}', 'ChildrenController@profile')->name('childrenProfile');
    Route::get('children/{id}/post', 'ChildrenController@post')->name('childrenProfilePost');
    Route::get('children/{id}/edit', 'ChildrenController@edit')->name('childrenProfileEdit');
  });

Route::post('/children/add','UserController@insertChildren')->name('insertChildren')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::POST('regUser','HomeController@regUser')->name('regUser');
Route::get('/logout', 'HomeController@logout')->name('logout');
