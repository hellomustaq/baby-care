<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Children;
use App\Caregiver;
use App\User;
use App\Post;

use Auth;

class CaregiverController extends Controller
{
   	public function childrenProfile($cid){
		   $selected=Children::where('id','=',$cid)->first();
		   $posts=Post::where('children_id','=',$cid)->get();
   		return view('caregiver.childProfile')->with([
			   'selected' => $selected,
			   'posts' => $posts]);
	   }
	
	public function childrenGellary($cid){
		$selected=Children::where('id','=',$cid)->first();
		$posts=Post::where('children_id','=',$cid)->get();
		return view('caregiver.gellary')->with([
			'selected' => $selected,
			'posts' => $posts]);
	}
	   
	public function createPostForm($id){
		$selected=Children::where('id','=',$id)->first();
		return view('caregiver.postForm')->with('selected',$selected)->with('id',$id);
	}

	public function singlePost($id,$cid){
		$selected=Children::where('id','=',$cid)->first();
		$post=Post::where('id','=',$id)->first();
		return view('caregiver.singlePost')->with('selected',$selected)->with('post',$post);
	}

	public function createPost(Request $request){
		$validator =Validator::make($request->all(), [
            'title' => 'required',
			'postBody' => 'required',
			// 'profileImage' => 'required',
		]);
		
		if ($validator->fails()) {
            $initialError="Ohh!! Some field's data missing!!";
            return redirect()->back()
                        ->withInput($request->all())->withErrors($initialError);
        }else{
			if ($request->hasFile('postImage')) {
				$profileImage=$request->file('postImage');
				$imageExtention=$profileImage->getClientOriginalExtension();
				$randomString=substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 10);
				$modifiedImageName=$randomString.'.'.$imageExtention;
				$checkDuplicateName=Post::where('image','=',$modifiedImageName)->get();
				if ($checkDuplicateName == $modifiedImageName) {
					$randomString=substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 10);
					$modifiedImageName=$randomString.'.'.$imageExtention;
				}
				$profileImage->move(public_path('img/postImage'),$modifiedImageName);
				$userId=Auth::guard('caregiver')->user()->id;
				$insert= Post::create([
					'children_id' => $request->input('childrenId'),
					'caregiver_id' => $userId,
					'title' => $request->input('title'),
					'body' => $request->input('postBody'),
					'image' => $modifiedImageName,
				]);
				$cid=$request->input('childrenId');
				$selected=Children::where('id','=',$cid)->first();
				//return view('caregiver.childProfile')->with('selected',$selected);
				return redirect()->route('c.childrenProfile',$cid);
				
	
			}
		}

        
	}
}
