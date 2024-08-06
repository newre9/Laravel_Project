<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Team extends Controller
{
    public function about(){
        return view('home-page.about');
    }
    public function veen(){
        return view('home-page.veen');
    }
    public function tevfik(){
        return view('home-page.tevfik');
    }
    public function Gbenga(){
        return view('home-page.Gbenga');
    }
    public function Anna(){
        return view('home-page.Anna');
    }
    public function Naham(){
        return view('home-page.Naham');
    }
    public function Translate(){
        return view('home-page.translation');
    }
    public function Editing(){
        return view('home-page.editing');
    }
    public function privacypolicy(){
        return view('home-page.privacypolicy');
    }
}
