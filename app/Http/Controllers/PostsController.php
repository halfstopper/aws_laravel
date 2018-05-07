<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function index(){
    	return view('posts.index');
    }
    public function show(){
    	return view('posts.show');
    }
    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	//Create new post and store into database
/*    	$post = new \App\Post;
    	$post -> title = request('title');
    	$post -> body = request('body');

    	$post -> save();*/

    	Post::create([
    		'title' => request('title'),
    		'body'  => request('body')
    	]);
    	return redirect('/');
    }
}
