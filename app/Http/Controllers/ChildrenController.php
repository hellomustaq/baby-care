<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Children;
use Auth;
use Validator;

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
    public function update(Request $request, $id){
        $validator =Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            ////| mimes:jpeg,jpg,png | max:5200'
        ]);

        if ($validator->fails()) {
            $initialError="Ohh!! Some field's data missing! Try Again!!";
            $selected=Children::where('id','=',$id)->first();
            return redirect()->back()
                        ->with('selected',$selected)->withErrors($initialError);
        }else{
            $updateInfo=Children::where([
                    'id'=>$id,
                ])
                ->update([
                    'first_name' => $request->input('firstName'),
                    'last_name' => $request->input('lastName'),
                    'gender' => $request->input('gender'),
                    'birth_day' => $request->input('birthday'),
                ]);
            if ($request->hasFile('image')) {
                $profileImage=$request->file('image');
                $imageExtention=$request->file('image')->getClientOriginalExtension();
                $randomString=substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 10);
                $modifiedImageName=$randomString.'.'.$imageExtention;
                $checkDuplicateName=Children::where('image','=',$modifiedImageName)->get();
                if ($checkDuplicateName == $modifiedImageName) {
                    $randomString=substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 10);
                    $modifiedImageName=$randomString.'.'.$imageExtention;
                }
                $profileImage->move(public_path('img'),$modifiedImageName);
                $updateInfo=Children::where([
                    'id'=>$id,
                ])
                ->update([
                    'image' => $modifiedImageName,
                ]);
            }
            $successMess="Data update successfully. Take a look & do not click update again beacuse it already updated!!";
            return redirect()->back()->with('success',$successMess);

        }
    }
}
