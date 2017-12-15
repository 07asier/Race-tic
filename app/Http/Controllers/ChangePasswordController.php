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
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    private $passok = null;


    public function data(Request $request){

        $users = DB::table('users')->get();

        foreach ($users as $user) {

            $pass = $request->input("pass");
            $oldpass = $request->input("oldpass");

            $hashedPassword = $user->password;

            if (Hash::check($oldpass, $hashedPassword))
            {
                //print_r("ok");

                //$this-> $passok = $oldpass;
                $this->setOldPass($oldpass);
                print_r($this->setOldPass($oldpass));

                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['password' => bcrypt("$pass")]);
                //return back();
            }else{
               print_r("error");
            }
        }
    }

    public function setOldPass(String $passok){
        $this->passok = $passok;
    }

    public function getOldPass(){

        return $this->passok;
    }

    /*public function __toString()
    {
        return $this->$passok;
    }*/


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|string|min:6',

        ]);
    }


}