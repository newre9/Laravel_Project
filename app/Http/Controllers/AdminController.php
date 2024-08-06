<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
   
   
    public function adminpage(){
        if(auth()->user()->isAdmin() ) 
    {
        
        return view('admin-page.index');
    }
    else if(auth()->user()->isUser() ){
        return view('user-panel.user-index');
    }
    else{
        return view('home-page.index');
    }
      
    }
    
}
