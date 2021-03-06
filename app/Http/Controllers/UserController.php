<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Children;
use App\Token;
use App\User;
use Auth;


class UserController extends Controller
{

    public function insertChildren(Request $request){
        
        $validator =Validator::make($request->all(), [
            'token' =>'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'image' =>  'required' ,
            ////| mimes:jpeg,jpg,png | max:5200'
        ]);
        
        if ($validator->fails()) {
            $initialError="Ohh!! Some field's data missing!!";
            return redirect()->back()
                        ->withInput($request->all())->withErrors($initialError);
        }
        if (!empty($request->input('token'))) {
            $token=$request->input('token');
            $originToken=Token::where([
                'token'=>$token,
                'usage' => '0'
                ])->count();
            if ($originToken > 0) {
                $updateUsage=Token::where([
                    'token'=>$token,
                    'usage' => '0'
                    ])
                    ->update([
                    'usage' => 1
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
                    //$addProductInput['image']=$modifiedImageName;
                    //echo $modifiedImageName;
                    $userId=Auth::user()->id;
                    $insert= Children::create([
                        'user_id' => $userId,
                        'first_name' => $request->input('firstName'),
                        'last_name' => $request->input('lastName'),
                        'gender' => $request->input('gender'),
                        'birth_day' => $request->input('birthday'),
                        'image' => $modifiedImageName,
                    ]);
                    $userId=Auth::user()->id;
                    $child=User::find($userId);$childrens=$child->childern();
                    return redirect()->route('home')->with('childrens',$childrens);
        
                }

            }else{
                $initialError="Invalid Token. Contract with Admin!";
                return redirect()->back()
                        ->withInput($request->all())->withErrors($initialError);
            }
        }
    }

    public function live(){
        return view('live');
    }
}
