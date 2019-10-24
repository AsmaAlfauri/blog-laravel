<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','body','comment_id', 'user_id'];

    public function user()
    { //any name descriptive name
        return $this->hasOne('App/User'); //name of model
    }

    public function comment(){ //any name descriptive name
        return $this->hasMany('App/Comment'); //name of model
    }

}
