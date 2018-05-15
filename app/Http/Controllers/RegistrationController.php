<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
	public function create(){
		return view('sessions.create');
	}
	public function store(){
		//validate the form
		$this -> validate (request(),[
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required'
		]);
		//Create and save the user
		$user = User::create(request(['name','email','password']));

		//Sign them in
		auth()->login($user);

		//Redirect to homepage
		return redirect()->home();

	}

    //
}
 