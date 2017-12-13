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



        foreach ($users as $user)
        {
            echo $user->name;
            echo $user->id;
            DB::table('users')
                ->where('id', $user->id)
                ->update(['password' => bcrypt("zubiri1")]);
        }

        //print_r ("aa");
    }


}