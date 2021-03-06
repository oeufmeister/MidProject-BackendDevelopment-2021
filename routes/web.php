<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});
// Route::get('/courses', function () {
//     return view('courses');
// });
Route::get('/courses','HomeController@home')->name('course.home');
Route::post('/courses','HomeController@store')->name('course.store');

Route::get('/logout', 'Auth\LoginController@logout');


Auth::routes();

// Route::redirect('/home', '/#');
// Route::get('/home', 'HomeController@index')->name('welcome');
