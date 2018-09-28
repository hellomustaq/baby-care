<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Children;
use App\Caregiver;
use App\User;
use App\Post;
use App\Token;

use Auth;

class AdminController extends Controller
{
   	public function childList(){
        $childList=Children::all();
           return view('admin.childList')->with('childs',$childList);
    }

    public function caregiverList(){
        $caregiver=Caregiver::all();
        return view('admin.caregiverList')->with('caregivers',$caregiver);
    }

    public function token(){
        $abilableCheck=Token::where('usage','=','0')->count();
        if($abilableCheck<6){
            for($i=0;$i<9;$i++){
                $randomString=substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
                Token::create([
                'token' => $randomString,
                'usage' => '0'
            ]);
            }
            
        }

        $tokens=Token::where('usage','=','0')->get();
        return view('admin.tokenList')->with('tokens',$tokens);
    }
}
