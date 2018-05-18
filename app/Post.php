<?php

namespace App;
use Carbon\Carbon;

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


    public static function archives(){
             return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    //For archieves
    public function scopeFilter($query, $filters){
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        if (!empty($filters)
            && array_key_exists('month', $filters)
            && array_key_exists('year', $filters)
            && count(array_intersect($filters, $months)) > 0
            && is_int((int) $filters['year'])){
                $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
                $query->whereYear('created_at', $filters['year']);
        }
    }
}
