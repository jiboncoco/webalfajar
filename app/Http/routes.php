<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'Controller@login');
Route::get('news', 'Controller@news');
Route::get('agenda', 'Controller@agenda');
Route::get('pengumuman', 'Controller@pengumuman');
Route::get('artikel', 'Controller@artikel');
Route::get('portal_tk', 'Controller@portal_tk');
Route::get('portal_sd', 'Controller@portal_sd');
Route::get('portal_smp', 'Controller@portal_smp');
Route::get('portal_sma', 'Controller@portal_sma');
Route::get('view', 'Controller@view');
Route::get('test', 'Controller@test');
Route::get('pendaftaran', 'Controller@pendaftaran');
Route::get('pendaftaran/TK-PDF', 'Controller@pendaftarantk_pdf');
Route::get('pendaftaran/SD-PDF', 'Controller@pendaftaransd_pdf');
Route::get('pendaftaran/SMP-PDF', 'Controller@pendaftaransmp_pdf');
Route::get('pendaftaran/SMA-PDF', 'Controller@pendaftaransma_pdf');

Route::get('admin', 'LoginController@admin');
Route::post('login_staff', 'LoginController@login_staff');
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
