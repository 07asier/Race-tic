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
    private $passok = null;


    public function data(Request $request){


        $id = Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->get();

        foreach ($users as $user) {

            $pass = $request->input("pass");
            //$oldpass = $request->input("oldpass");

            $hashedPassword = $user->password;

            // (Hash::check($oldpass, $hashedPassword)) {
                //$this-> $passok = $oldpass;
                //$this->setOldPass($oldpass);
                //print_r($this->setOldPass($oldpass));
                //print_r($oldpass);


                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['password' => bcrypt("$pass")]);
                return back();
            //}else{

               //return back();
            //}
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