<?php

namespace App;


class Post extends Model
{
    //protected $fillable = ['title','body'];
    //Auto inherit from Model
    public function comments(){
    	return $this->hasMany(Comment::class);
    }
}
