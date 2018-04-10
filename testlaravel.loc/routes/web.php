<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// GET  POST
// PUT DELETE UPDATE

//page 
/*Route::get('/', function () {
	
	// View
    return view('welcome');
    
});*/

Route::get('/', 'IndexController@index');

Route::get('article/{id}', 'IndexController@show')->name('articleShow');


Route::get('page/add', 'IndexController@add');
Route::post('page/add', 'IndexController@store')->name('articleStore');

Route::delete('page/delete/{article}', function(\App\Article $article){
	
	//$article_tmp = \App\Article::where('id',$article )->first();
	
	//dd($article);
	
	$article->delete();
	
	return redirect('/');
	
})->name('articleDelete');

