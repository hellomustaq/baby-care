<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['children_id','caregiver_id','title','body','image'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function caregiver(){
        return $this->belongsTo('App\Caregiver');
    }

    public function children(){
        return $this->belongsTo('App\Children');
    }
}
