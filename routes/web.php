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

// Route::get('/', function () {
//     return view('welcome');
 
// })->name('home');//data show one web page
Route::get('/','PageController@homefun'

)->name("homename");

Route::get('contact','PageController@contactfun'
)->name("contactname");

Route::get('about','PageController@aboutfun'
)->name("aboutname");

//data show one web page

Route::get('post','PageController@postfun'
)->name("postname");

