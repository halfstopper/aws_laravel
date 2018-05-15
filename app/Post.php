<?php

namespace App;


class Post extends Model
{
    //protected $fillable = ['title','body'];
    //Auto inherit from Model
    public function comments(){
    	return $this->hasMany(Comment::class);
    }
    public function addComment($body){
    	//Add a comment to a post
/*	   	Comment::create([
    		'body'=> $body,
    		'post_id'=> $this->id
    	]);*/
    	$this->comments()->create(compact('body'));

    }

    public function user(){ //$comment->post->user
        return $this->belongsTo(User::class);
    }
}
