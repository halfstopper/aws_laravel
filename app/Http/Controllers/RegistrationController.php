<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
	public function create(){
		return view('registration.create');
	}
	public function store(){
		//validate the form
		$this -> validate (request(),[
			'name' => 'required',
			'email' => 'required|unique:users|email',
			'password' => 'required|confirmed'
		]);
		//Create and save the user
		//$user = User::create(request(['name','email','password']));
		//Fixed
		$user = User::create([
			'name' =>request('name'),
			'email' =>request('email'),
			'password' =>bcrypt(request('password')),

		]);\

		//Email
		Mail::to($user)->send(new Welcome($user));

		//Sign them in
		auth()->login($user);

		//Redirect to homepage
		return redirect()->home();

	}

    //
}
 