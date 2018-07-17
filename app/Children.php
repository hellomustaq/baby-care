<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Children extends Model
{
    //
    protected $fillable=['user_id','first_name','last_name','gender','birth_day','image'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
