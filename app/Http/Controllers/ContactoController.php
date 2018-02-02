<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactoEmail;
use Illuminate\Support\Facades\Validator;
use App\Contacto;
use Mail;
use DB;


class ContactoController extends Controller{




    public function index(){
        return view('contacto');
    }

    protected function create(array $data){

        //se crea un contacto nuevo mediante el modelo
        return Contacto::create([
            'name' => $data['name'],
            'email' => $data['email'],

        ]);
    }


    public function datosContacto(Request $request){
        //validacion de los datos
        $this->validator($request->all())->validate();

        DB::beginTransaction();
        try
        {
            $contactinfo = $this->create($request->all());
            //envio del email
            $email = new ContactoEmail(new Contacto([ 'name' => $contactinfo->name , 'email' => $contactinfo->email]));
            Mail::to($contactinfo->email)->send($email);
            DB::commit();
            return back();

        }
        catch(Exception $e)
        {
            DB::rollback();
            return back();
        }



    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',

        ]);
    }

}