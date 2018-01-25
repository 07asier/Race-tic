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


Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});

//Rutas a contacto
Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('contact', 'ContactoController@datosContacto');

Route::post('/contactoconfirm', function () {
    return view('email.contactoconfirm');
});

//Rutas a coches
Route::get('/coches',['middleware'=>'auth', function () {
    return view('coches');
}]);

Route::post('add','CocheController@add');


Route::get('/comofunciona', function () {
    return view('comofunciona');
});


//Rutas al perfil
Route::get('/perfil',['middleware'=>'auth',  function () {
    return view('user/perfil');
}]);

Route::post('dato','PerfilController@data');

//Rutas a carreras
Route::get('/carreras', function () {
    return view('Carreras.carreras');
});

Route::get('/carreras', 'CarrerasController@index')->name('Carreras.carreras');

Route::get('/carrerasenvivo', function () {
    return view('Carreras.carrerasenvivo');
});

Route::get('/carrerasenvivo', 'CarrerasEnVivoController@index')->name('Carreras.carrerasenvivo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');





Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/home', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');

    Route::get('/home2', function () {
        return view('admin.home');
    });



    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});


Route::get('/adminVerUsuarios','GestionarUsuariosController@ver');
Route::get('/adminEliminarUsuario/{id}', 'GestionarUsuariosController@eliminar');
Route::get('/adminEditarUsuario/{id}', 'GestionarUsuariosController@editar');
Route::put ('/adminActualizarUsuario/{id}','GestionarUsuariosController@update');




