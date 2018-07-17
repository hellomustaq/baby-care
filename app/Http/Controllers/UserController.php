<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Children;
use Auth;

class UserController extends Controller
{

    public function insertChildren(Request $request){
        
        $validator =Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'image' =>  'required',
        ]);
        
        if ($validator->fails()) {
            $initialError="Ohh!! Some field's data missing!!";
            return redirect()->back()
                        ->withInput($request->all())->withErrors($initialError);
        }

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
            //$addProductInput['image']=$modifiedImageName;
            //echo $modifiedImageName;
            $userId=Auth::user()->id;
            $insert= Children::create([
                'parent_id'=> $userId,
                'first_name' => $request->input('firstName'),
                'last_name' => $request->input('lastName'),
                'gender' => $request->input('gender'),
                'birth_day' => $request->input('birthday'),
                'image' => $modifiedImageName,
            ]);
            return redirect()->route('home');

          }


        

    }
}
