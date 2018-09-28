<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Children;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $userId=Auth::user()->id;
        $child=User::find($userId);
        $childrens=$child->childern;
        // foreach ($childrens as $key) {
        //     echo $key->first_name;
        // }die;
        return view('home')->with('childrens',$childrens);
    }

    public function regUser(Request $request){
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')
            ->with('message', 'You have been logged out');
    }
}