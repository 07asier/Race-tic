<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
| Route::get('/verify/{token}','Auth\RegisterController@verify');
*/

Route::post('/contactoconfirm', function () {
    return view('email.contactoconfirm');
});

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/contacto', function () {
    return view('contacto');
});


Route::post('contact', 'ContactoController@datosContacto');
//rutas del coche
Route::get('/coches', function () {
    return view('coches');
});

Route::post('add','CarController@add');
//
Route::get('/comofunciona', function () {
    return view('comofunciona');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


Route::get('/perfil', function () {
    return view('user/perfil');
});

Route::post('dato','ChangePasswordController@data');


Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});


