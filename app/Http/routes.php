<?php

// Route::resource('short', 'API\UrlController');

Route::get('home', function(){
	return redirect('short/create');
});

Route::get('/', function(){
	return redirect('short/create');
});

Route::get('store', 'API\UrlController@index');
Route::get('short/create', 'API\UrlController@create');
Route::post('short/store', 'API\UrlController@store');
Route::get('/{url}', 'API\UrlController@redirect');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
