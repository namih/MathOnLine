<?php

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


/*Route::domain('{account}.space.com')->group(function (){
    Route::get('/', function () {
        return view('space.home');
    });

    Route::get('/awards', function () {
        return view('space.awards');
    });

    Route::get('/mechanics', function () {
        return view('space.mechanics');
    });

    Route::get('/play', function() {
        return view('space.play');
    });

    Route::get('/thanks', function() {
        return view('space.thanks');
    });
});*/

Route::prefix('tnt')->group(function () {
//	Route::get('/', 'HomeController@setUrlfrom');
	Route::get('/',function() { return redirect('tnt/home'); });
	Route::get('home', 'HomeController@setUrlfrom')->name('home');
	Route::get('awards',function () { return view('space.awards'); });
	Route::get('mechanics',function () { return view('space.mechanics'); });
	Route::get('thanks',function () { return view('space.thanks'); });
	Route::get('bases',function () { return view('space.bases'); });
	Route::get('sign_up', 'HomeController@index');
	Route::get('redirect', 'L@redirect');

//Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes();
	Route::get('redirect', 'LoginController@redirect');
	Route::get('callback', 'LoginController@callback');
	Route::post('register_cp', 'HomeController@register');
	//Route::get('play', 'HomeController@play');
	Route::get('play',function () { return view('space.thanks'); });
	Route::group(['middleware' => ['auth'] ], function() { Route::get('admin', 'HomeController@admin'); });
	Route::resource('question','QuestionController');
	Route::resource('user','UserController');
});


Route::prefix('space')->group(function () {
	Route::get('/',function() { return redirect('space/home'); });
	Route::get('home', 'HomeController@setUrlfrom')->name('home');
	Route::get('awards',function () { return view('space.awards'); });
	Route::get('mechanics',function () { return view('space.mechanics'); });
	Route::get('thanks',function () { return view('space.thanks'); });
	Route::get('bases',function () { return view('space.bases'); });
	Route::get('sign_up', 'HomeController@index');
	Route::get('redirect', 'L@redirect');

//Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes();
	Route::get('redirect', 'LoginController@redirect');
	Route::get('callback', 'LoginController@callback');
	Route::post('register_cp', 'HomeController@register');
	Route::get('play',function () { return view('space.thanks'); });
	Route::group(['middleware' => ['auth'] ], function() { Route::get('admin', 'HomeController@admin'); });
	Route::resource('question','QuestionController');
	Route::resource('user','UserController');

});


Route::prefix('warner')->group(function () {
	Route::get('/',function() { return redirect('warner/home'); });
	Route::get('home', 'HomeController@setUrlfrom')->name('home');
	Route::get('awards',function () { return view('space.awards'); });
	Route::get('mechanics',function () { return view('space.mechanics'); });
	Route::get('thanks',function () { return view('space.thanks'); });
	Route::get('bases',function () { return view('space.bases'); });
	Route::get('sign_up', 'HomeController@index');
	Route::get('redirect', 'L@redirect');

//Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes();
	Route::get('redirect', 'LoginController@redirect');
	Route::get('callback', 'LoginController@callback');
	Route::post('register_cp', 'HomeController@register');
	Route::get('play',function () { return view('space.thanks'); });
	Route::group(['middleware' => ['auth'] ], function() { Route::get('admin', 'HomeController@admin'); });
	Route::resource('question','QuestionController');
	Route::resource('user','UserController');

});


Route::prefix('cn')->group(function () {
	Route::get('/',function() { return redirect('cn/home'); });
	Route::get('home', 'HomeController@setUrlfrom')->name('home');
	Route::get('awards',function () { return view('space.awards'); });
	Route::get('mechanics',function () { return view('space.mechanics'); });
	Route::get('thanks',function () { return view('space.thanks'); });
	Route::get('bases',function () { return view('space.bases'); });
	Route::get('sign_up', 'HomeController@index');
	Route::get('redirect', 'L@redirect');

//Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes();
	Route::get('redirect', 'LoginController@redirect');
	Route::get('callback', 'LoginController@callback');
	Route::post('register_cp', 'HomeController@register');
	Route::get('play',function () { return view('space.thanks'); });
	Route::group(['middleware' => ['auth'] ], function() { Route::get('admin', 'HomeController@admin'); });
	Route::resource('question','QuestionController');
	Route::resource('user','UserController');

});

/*
Route::get('/tnt', 'HomeController@setUrlfrom')->name('home');
Route::get('/space', 'HomeController@setUrlfrom')->name('home');
Route::get('/warner', 'HomeController@setUrlfrom')->name('home');
Route::get('/cn', 'HomeController@setUrlfrom')->name('home');
*/
Route::get('/', 'HomeController@setUrlfrom');
Route::get('home', 'HomeController@setUrlfrom')->name('home');


Route::get('awards',function () {
    return view('space.awards');
});

Route::get('mechanics',function () {
    return view('space.mechanics');
});

Route::get('thanks',function () {
    return view('space.thanks');
});

Route::get('bases',function () {
    return view('space.bases');
});

Route::get('sign_up', 'HomeController@index');

Route::get('redirect', 'L@redirect');

//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('redirect', 'LoginController@redirect');
Route::get('callback', 'LoginController@callback');

Route::post('register_cp', 'HomeController@register');

Route::get('play',function () { return view('space.thanks'); });

Route::group(['middleware' => ['auth'] ], function() {
    Route::get('admin', 'HomeController@admin');
});


Route::resource('question','QuestionController');
Route::resource('user','UserController');
