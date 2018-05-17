<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct(){

    	$this-> middleware('guest',['except' => 'destroy']);
    }


    public function create(){
    	return view('sessions.create');
    }

    public function store(){
    	// Attempt to authenticate the user
    	if (! auth()-> attempt(request(['email','password']))){
    		return back()->withErrors([
    			'message' => 'Please check your credentials and try again.'
    		]);
    	}
    	else{
    		return redirect()->home();

    	}
    	//Redirect back to homepage
    	
    }

    public function destroy(){
    	//Logging Out
    	auth()->logout(); 
		//Redirect to homepage
		return redirect()->home();

    }


}

