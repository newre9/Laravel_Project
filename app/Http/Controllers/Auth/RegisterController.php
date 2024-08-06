<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserRoles;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Mail;
use Illuminate\Support\Str;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    protected $redirectTo = '/';
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

        return Validator::make($data, [

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'university' => ['required', 'string'],
            'country' => ['required', 'string'],
            'verification_code'=>['string','nullable'],
            'is_verified'=>['integer','default(0)'],

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
        $token = Str::random(60);
        $user = User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'university'=>$data['university'],
            'country'=>$data['country'],


        ]);

        Auth::login($user);
        $user->remember_token = $token;
        $user->save();
        $mail_data=array("header"=>"click verify to verify your email","body"=>"<a href='http://entrediting.com/verify_token/".$token."'>verify</a>");
        $to_name =$user->name;
        $to_email=$user->email;
        $subject="verify email";
        $m=Mail::send('emails.send', $mail_data, function($message) use ($to_name, $to_email,$subject) {
            $message->to($to_email, $to_name)->subject($subject);
            $message->from('no-replay@entrediting.com','EnTrEditing');
        });
        //$user_id=DB::getPdo()->lastInsertId()+1;
        //$user_id=$user->id;
        /*foreach($data['roles'] as $selected){
        $user_role = new UserRoles();
        $user_role->role_id = $selected;
        $user_role->user()->associate($user);
        $user_role->save();
        }*/

       // $user->user_roles->save($user_role);

        //return $user;
        /*
        $user = new User();
        $user->name= $data['name'];
        $user->email = $data['email'];
        $user->role=$data['role'];
$user->password = Hash::make($data['password']);

$user->university=$data['university'];
$user->country=$data['country'];
$user->save();
$this->activation->sendActivationMail($user);
return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');*/
    }
}
