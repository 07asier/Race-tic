<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Coche;

class CocheController extends Controller
{


    public function index()
    {
        return view("coches");
    }

    public function add()
    {
        Coche::create(array(
            'num_serie'=>Input::get('numserie'),
            'marca'=>Input::get('subject'),
            'motor'=>Input::get('motor'),
            'modelo'=>Input::get('modelo'),
            'mensaje'=>Input::get('message')
        ));

        return redirect("coches");
    }

    public function save_data(Request $request)
    {
        $coche = Cars::create($request->all());
        return redirect()->route('/inicio');

    }

}
