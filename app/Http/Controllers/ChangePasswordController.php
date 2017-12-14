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


class ChangePasswordController extends Controller
{

    public function data(Request $request){

        //$email = DB::table('users')->where('id', 'John')->value('email');

        $users = DB::table('users')->get();



        foreach ($users as $user) {
            //echo $user->name;
            //echo $user->id;
            /*return User::create([
                'password' => $data['newpassword'],


            ]);

            print_r($data->all());*/
            $name = $request->input("pass");
            echo $name;

            DB::table('users')
                ->where('id', $user->id)
                ->update(['password' => bcrypt("$name")]);
            return back();
        }

        //print_r ("aa");
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|string|min:6',


        ]);
    }


}