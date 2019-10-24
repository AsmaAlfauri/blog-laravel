<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body','blog_id', 'user_id'];

    public function blog(){ //any name descriptive name
        return $this->hasOne('App/Blog'); //name of model
    }
    public function user(){ //any name descriptive name
        return $this->hasOne('App/User'); //name of model
    }
}
