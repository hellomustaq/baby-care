<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Children;
use Auth;

class ChildrenController extends Controller
{
    public function profile($id){
        $userId=Auth::user()->id;
        $child=User::find($userId);
        $childrens=$child->childern;
        $selected=Children::where('id','=',$id)->first();
        return view('childrens.profile')->with('childrens',$childrens)->with('selected',$selected);
    }

    public function post($id){
        $userId=Auth::user()->id;
        $child=User::find($userId);
        $childrens=$child->childern;
        $selected=Children::where('id','=',$id)->first();
        return view('childrens.post')->with('childrens',$childrens)->with('selected',$selected);
    }


    public function edit($id){
        $userId=Auth::user()->id;
        $child=User::find($userId);
        $childrens=$child->childern;
        $selected=Children::where('id','=',$id)->first();
        return view('childrens.edit')->with('childrens',$childrens)->with('selected',$selected);
    }
}
