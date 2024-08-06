<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Orders;

class UserpanelController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }




    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        return view('user-panel.user-index');
    }

    public function editpanel($id){
        $customer = \App\User::FindOrFail($id);
        return view('user-panel.edit-profile',compact('customer'));

    }
    public function profile($id){

        $customer = \App\User::FindOrFail($id);
        return view('user-panel.profile',compact('customer'));

    }



    public function show($id)
    {
     $orderdetay = \App\Orders::FindOrFail($id);


        return view('user-panel.vieworderpanel',compact('orderdetay'));
    }




    public function updates(Request $request, $id)
    {

       $customerupdate=[
        'name'=>$request->name,
        'email'=>$request->email,
        'university'=>$request->school,
        'country'=>$request->country


       ];

        DB::table('users')->where('id',$id)->update($customerupdate);




        return redirect('home')->with('success','bilgileriniz Başarıyla Güncellendi ');
    }



}
