<?php

//use App\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionController@create');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//For Route Tutorial
/*Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');
Route::get('/posts/{post}');*/


//Old tutorial
/*Route::get('/tasks', function () {
	//$tasks = DB::table('tasks')->latest()->get();
	//For Eloquent
	$tasks = Task::all();
    return view ('tasks.index',compact('tasks'));

});*/

/*Route::get('/tasks/{task}', function ($id) {
	//$task = DB::table('tasks')->find($id);
	$task = Task::find($id);

    return view ('tasks.show',compact('task'));
});
*/

