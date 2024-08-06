<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\User;
use Carbon\Carbon;

class HomePage extends Controller
{
    //
    public function index(){
        return view('home-page.index');
    }
    public function verify_token($token){
        $user = User::Where("remember_token",$token)->first();
        if($user){
            $user->email_verified_at = Carbon::now();
            $user->save();
            return "your email (".$user->email.") has been verified successfully";
        }else{
            return "not found.";
        }
    }




}
