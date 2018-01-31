<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Mail;
use App\Mail\EmailVerification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //se validan los datos introducidos
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //creacion de un nuevo usuario con los datos introducidos
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_token' => str_random(10),
                //base64_encode($data['email'])
        ]);
    }

    /*public function register(Request $request){
        $this->validator($request->all())->validate();
        event (new Registered($user = $this->create($request->all())));
        dispatch(new SendVerificationEmail($user));

        return view('verification');
    }*/

    public function register(Request $request)
    {
        // Laravel validation

        $this->validator($request->all())->validate();

        DB::beginTransaction();
        try
        {
            $user = $this->create($request->all());
            // Despues de crear el usuario se envia un email con el token generado
            $email = new EmailVerification(new User(['email_token' => $user->email_token, 'name' => $user->name]));
            Mail::to($user->email)->send($email);
            DB::commit();
            //se retorna la vista verificacion;
            return view ('verification');
        }
        catch(Exception $e)
        {
            DB::rollback();
            return back();
        }
        return view ('verification');
    }

    public function verify($token){

        /*$user = User::where('email_token',$token)->first();
        $user->verified = 1;

        if($user->save()){
            return view('emailconfirm',['user'=>$user]);
        }*/

        User::where('email_token',$token)->firstOrFail()->verified();
        return redirect('login');
    }
}
