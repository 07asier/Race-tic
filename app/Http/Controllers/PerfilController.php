<?php
/**
 * Created by PhpStorm.
 * User: asier
 * Date: 12/12/17
 * Time: 13:20
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('user.perfil');
    }

    private $passok = null;


    public function data(Request $request){

        //se recoge el id del usuario correspondiente
        $id = Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->get();
        //for para cada usuario
        foreach ($users as $user) {
            //se actualiza la contraseña
            $pass = $request->input("pass");
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['password' => bcrypt("$pass")]);
                return back();


        }
    }

    public function setOldPass(String $passok){
        $this->passok = $passok;
    }

    public function getOldPass(){
        return $this->passok;
    }




    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|string|min:6',

        ]);
    }


}