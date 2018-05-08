<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function index(){

        $posts = Post::latest()->get();
        //$posts = Post::all();

    	return view('posts.index',compact('posts'));
    }
    //Show post at individual post page
    public function show(Post $post){
        //$post = Post::find($id);
    	return view('posts.show',compact('post'));
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
        //Validating whether is there any field in the textbox
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
    	Post::create(request(['title','body']));
    	return redirect('/');
    }
}
