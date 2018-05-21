<?php

namespace App\Repositories;
use app\Post;
use App\Redis;
Class Posts{
	protected $radis;
	protected redis;
	public function __construct(Redis $redis){
		$this -> radis = '#redis';
	}

	public function all(){
		return Post::all();
	}
} 