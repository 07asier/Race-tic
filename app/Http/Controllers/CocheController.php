<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Coche;

class CocheController extends Controller
{


    public function index()
    {
        return view("coches");
    }

    public function add()
    {
        $id = Auth::user()->id;
        $users = DB::table('coches')->where('user_id', $id)->get();

            DB::table('coches')->insert(
                ['num_serie' => Input::get('numserie'), 'user_id' => $id, 'marca' => Input::get('subject'),
                    'motor' => Input::get('motor'), 'modelo' => Input::get('modelo'), 'mensaje' => Input::get('message')]
            );


            /*Coche::create(array(
                'num_serie'=>Input::get('numserie'),
                'marca'=>Input::get('subject'),
                'motor'=>Input::get('motor'),
                'modelo'=>Input::get('modelo'),
                'mensaje'=>Input::get('message')
            ));*/

        return redirect("coches");
    }

    public function save_data(Request $request)
    {
        /*$coche = Cars::create($request->all());
        return redirect()->route('/inicio');*/

    }

}
