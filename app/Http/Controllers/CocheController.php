<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Coche;

class CocheController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view("coches");
    }

    public function add()
    {
        //se recoge el id del usuario correspondiente
        $id = Auth::user()->id;
        $users = DB::table('coches')->where('user_id', $id)->get();

        //consulta a la BD
            DB::table('coches')->insert(
                ['num_serie' => Input::get('numserie'), 'user_id' => $id, 'marca' => Input::get('subject'),
                    'motor' => Input::get('motor'), 'modelo' => Input::get('modelo'), 'mensaje' => Input::get('message')]
            );

        //redireccion a coches
        return redirect("coches");
    }

}
