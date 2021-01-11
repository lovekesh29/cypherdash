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
    return view('index');
});

Route::post('/webiste-analyze', 'HomeController@website_analyze');
Route::post('/contact-us', 'HomeController@contact_us');
Route::get('contact-us', 'HomeController@contactus_view');


Route::get('/india/{servicePage}', 'HomeController@get_pages');  //keep this route always in last
