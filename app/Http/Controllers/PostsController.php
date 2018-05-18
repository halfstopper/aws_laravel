<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function __construct(){
        //For only login user to do blogs
        $this->middleware('auth')->except(['index','show']);
    }


    public function index(){

/*        $posts = Post::latest()->get();
        //$posts = Post::all();

        if ($month =request('month')){
			$posts -> whereMonth('created_at');*/

		if (request(['month', 'year'])) {
			$posts = Post::latest()
			->filter(request(['month', 'year']))
			->get();
		} 
		else {
			$posts = Post::latest()->get();
        }

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        	->groupBy('year','month')
        	->orderByRaw('min(created_at) desc')
        	->get()
        	->toArray();
        //return $archives;
    	return view('posts.index',compact('posts','archives'));
       
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
    	//Post::create(request(['title','body','user_id']));

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

    	return redirect('/');
    }



}
