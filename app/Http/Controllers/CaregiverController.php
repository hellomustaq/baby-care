<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Children;
use App\Caregiver;
use App\User;
use Auth;

class CaregiverController extends Controller
{
   	public function childrenProfile($cid){
   		if (Auth::guard('caregiver')->check()) {
   			$userId=Auth::guard('caregiver')->user()->id;
   		}else{
   			die('not log in');
   		}
   		
        $caregiver=Caregiver::find($userId);
        $childrens=Children::where('caregiver_id','=',$userId)->get();
   		$selected=Children::where('id','=',$cid)->first();
   		return view('caregiver.childProfile')->with('selected',$selected)->with('childrens',$childrens);
   	}
}
