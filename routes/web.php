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
//Middleware a coches añadido
Route::get('/coches',['middleware'=>'auth', function () {
    return view('coches');
}]);

/*

Route::get('/adminEditarUsuario/{id}', function (){
    $usuarios = DB::table('users')->get();
    return view('editarUsuarios', ['usuarios' => $usuarios]);
});
 */

Route::post('add','CocheController@add');

Route::get('/comofunciona', function () {
    return view('comofunciona');
});

Route::get('/carreras', function () {
    return view('carreras');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

//Middleware a Perfil añadido
Route::get('/perfil',['middleware'=>'auth',  function () {
    return view('user/perfil');
}]);

Route::post('dato','PerfilController@data');


Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/home', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});

Route::get('/carreras', function () {
    return view('carreras');
});


/*
Route::get('/adminVerUsuarios','GestionarUsuariosController@ver');

Route::get('/adminEliminarUsuario/{id}', 'GestionarUsuariosController@eliminar');

Route::get('/adminEditarUsuario/{id}', 'GestionarUsuariosController@editar');

Route::put ('/adminActualizarUsuario/{id}','GestionarUsuariosController@update');
*/

