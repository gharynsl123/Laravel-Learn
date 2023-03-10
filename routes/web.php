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

Route::get('/', function () {
    return view('welcome');
});

/**
 * routing paling dasar
 */

 /**
  * contoh routing dengan controller
  */

  Route::get('/contoh', 'ContohController@ambil');


  //Route::resource('example', 'ExampleController');

  //Route::match(['get','post'], '/contoh', function(){
   // return redirect('/');
  //});

 //cara membuat controller run in terminal
 //php artisan make:controller ContohController
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/task', 'TaskController@index');
Route::get('/task/create', 'TaskController@create');
Route::post('/savetask', 'TaskController@store');

Route::get('/taskedit/{id}', 'TaskController@edit');
Route::put('/taskupdate/{id}', 'TaskController@update');

Route::get('/task/{id}', 'TaskController@detail');
Route::get('/delete/{id}', 'TaskController@delete');

Route::resource('/profile', 'ProfileController');
Route::resource('/create', 'CreateController');

Route::view('/admin', 'template.template');

