<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coche;

class CarrerasEnVivoController extends Controller
{
    //Redireccionamiento al login si el usuario intenta entrar sin estar logeado
    protected $redirectTo = '/carrerasenvivo';
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index(){
        return view('Carreras.carrerasenvivo');

    }

}
