<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    //Redireccionamiento al login si el usuario intenta entrar sin estar logeado
    protected $redirectTo = '/carreras';
    public function __construct()
    {
        $this->middleware('auth')->except(['logout', 'userLogout']);
    }
    public function index(){
        return view('Carreras.carreras');
    }

}
