<?php
use App\User;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
class UserController extends Controller
{
    public function index(){
        return view('home-page.index');
    }


    public function ViewUser($id)
    {    if(auth()->user()->isAdmin() )
        {
        $users = \App\User::FindOrFail($id);
        return view('admin-page.users.viewuser',compact('users'));
        }else{
            return view('home-page.index');
        }
    }
    public function DeleteUser(Request $request , $id)
    {  if(auth()->user()->isAdmin() )
        {
        $users = \App\User::FindOrFail($id);
        $users->delete();
        return redirect('adminpage');
        }
    else{
        return view('home-page.index');
    }
    }

    public function showAll(){
        if(auth()->user()->isAdmin() )
        {
       $users = \App\User::all();
        return view('admin-page.users.all')->with('users',$users);
    }
    else{
        return view('home-page.index');
    }
    }
    public function showAdmins(){
        if(auth()->user()->isAdmin() )
        {
        $users = \App\User::select('users.*')
        ->join('user_roles', 'users.id', 'user_roles.user_id')
        ->where('role_id', '1')->get();
        return view('admin-page.users.admins')->with('users',$users);
    }
    else{
        return view('home-page.index');
    }
    }
    public function showUsers(){
        if(auth()->user()->isAdmin() )
        {
        $users = \App\User::select('users.*')
        ->join('user_roles', 'users.id', 'user_roles.user_id')
        ->where('role_id', '2')->get();
        return view('admin-page.users.users')->with('users',$users);
    }
    else{
        return view('home-page.index');
    }
    }



 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        if(auth()->user()->isAdmin() )
        {
             DB::table('user_roles')
        ->where('user_id',$id)
        ->update([
        'role_id'=>$request->role_id,
        ]);


        return redirect('adminpage')->with('success','Üye bilgileri Güncellendi ');
    }
    else{
        return view('home-page.index');
    }
    }






    public function __construct()
    {
        $this->middleware('auth');
    }




}
