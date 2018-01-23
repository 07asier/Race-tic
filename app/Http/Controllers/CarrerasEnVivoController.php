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
        //$this->middleware('auth')->except(['logout', 'userLogout']);
    }
    public function index(){
        //return view('Carreras.carrerasenvivo');
    }

    public function index2()
    {
        return "hola";
    }

    public function show(Coche $coche)
    {
        return $coche;
    }

    public function store(Request $request)
    {
        $coche = Coche::create($request->all());

        return response()->json($coche, 201);
    }

    public function update(Request $request, Coche $coche)
    {
        $coche->update($request->all());

        return response()->json($coche, 200);
    }

    public function delete(Coche $coche)
    {
        $coche->delete();

        return response()->json(null, 204);
    }



}
