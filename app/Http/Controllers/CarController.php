<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;

use App\Cars;

class CarController extends Controller
{
    

    public function index()
    {
    	return view("coches");
    }
    
       public function add()
    {
    	Feature::create(array(
            'numserie'=>Input::get('numserie'),
            'subject'=>Input::get('subject'),
            'motor'=>Input::get('motor'),
            'modelo'=>Input::get('modelo'),
            'message'=>Input::get('message')
            ));
    }

    /* 
    public function store(Request $request)
    {
    	$coche = new laravel;
    	$coche->numserie = Input::get("numserie");
    	$coche->subject = Input::get("subject");
    	$coche->motor = Input::get("motor");
    	$coche->modelo = Input::get("modelo");
    	$coche->message = Input::get("message");

    	$coche->save();

    	return ("los datos han sido enviados!");
    } 
    */
    public function save_data(Request $request)
    {     
        $coche = Cars::create($request->all());
        return redirect()->route('/inicio');

    }

}
