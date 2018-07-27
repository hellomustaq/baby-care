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
   		$selected=Children::where('id','=',$cid)->first();
   		return view('caregiver.childProfile')->with('selected',$selected);
   	}
}
