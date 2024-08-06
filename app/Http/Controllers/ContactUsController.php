<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\ContactUs;



class ContactUsController extends Controller
{
    //
    public function contactUS()
    {
        return view('home-page.contact');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'subject'=>'required',
         'message' => 'required'
         ]);
         
        ContactUS::create($request->all());
        return redirect('/#contact')->with('success', 'Teşekkür ederiz Mesajınız iletildi !');
    }

    public function message(){
        
        if(auth()->user()->isAdmin() )
        {
        //$messages = \App\ContactUs::all();
        $messages=DB::select('select * from contactus ');
        return view('admin-page.messages.inbox',compact('messages'));
      //  return view('admin-page.messages.inbox')->with('messages',$messages);
    } else{
        return view('home-page.index');
    }
    }

    public function show($id)
    {
  
        if(auth()->user()->isAdmin() )
        {
     $messagesdetay = \App\ContactUs::FindOrFail($id);
        return view('admin-page.messages.viewmessages',compact('messagesdetay'));
    } else{
        return view('home-page.index');
    }
    }

    public function DeleteMessage(Request $request , $id)
    {if(auth()->user()->isAdmin() )
        {
        $users = \App\ContactUs::FindOrFail($id);
        $users->delete();
        return redirect('contact-us');
    } else{
        return view('home-page.index');
    }
    }
}
