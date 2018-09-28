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
Route::group(['prefix' => 'caregiver'], function () {
    Route::get('/login', 'CaregiverAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'CaregiverAuth\LoginController@login');
    Route::get('/logout', 'CaregiverAuth\LoginController@logout')->name('c.logout');
    Route::post('/logout', 'CaregiverAuth\LoginController@logout')->name('c.logout');
  
    Route::get('/register', 'CaregiverAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'CaregiverAuth\RegisterController@register');
  
    Route::post('/password/email', 'CaregiverAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'CaregiverAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'CaregiverAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'CaregiverAuth\ResetPasswordController@showResetForm');
    
    Route::get('/children/{cid}','CaregiverController@childrenProfile')->name('c.childrenProfile');
    Route::get('/children/gellary/{cid}','CaregiverController@childrenGellary')->name('c.childrenGellary');
    Route::get('/createPostForm/{id}','CaregiverController@createPostForm')->name('createPostForm');
    Route::post('/children/post/add','CaregiverController@createPost')->name('createPost');
    Route::get('/children/Post/{id}/{cid}','CaregiverController@singlePost')->name('singlePost');  
});


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
})->name('addChildren')->middleware('auth');

Route::group(['middleware'=>'auth'],function(){
    Route::get('children/{id}', 'ChildrenController@profile')->name('childrenProfile');
    Route::get('children/{id}/post', 'ChildrenController@post')->name('childrenProfilePost');
    Route::get('children/{id}/edit', 'ChildrenController@edit')->name('childrenProfileEdit');
    Route::post('children/{id}/edit', 'ChildrenController@update')->name('childrenProfileEdited');
    Route::get('/children/Post/{id}/{cid}','ChildrenController@singlePost')->name('singlePostForUser');
  });

Route::post('/children/add','UserController@insertChildren')->name('insertChildren')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/video/live', 'UserController@live')->name('liveRoom')->middleware('auth');
Route::POST('regUser','HomeController@regUser')->name('regUser');
Route::get('/logout', 'HomeController@logout')->name('logout');



Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('a.login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
  Route::get('/logout', 'AdminAuth\LoginController@logout')->name('logout');

//   Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
//   Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::get('/childlist','AdminController@childList')->name('a.childList');
  Route::get('/caregiverlist','AdminController@caregiverList')->name('a.caregiverList');
  Route::get('/tokenList','AdminController@token')->name('a.token');
});
