<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
class LanguageController extends Controller
{
    public function langen()
    {


        App::setLocale('en');
        session()->put('locale', 'en');
        return redirect()->back();
    }
    public function langtr()
    {


        App::setLocale('tr');
        session()->put('locale', 'tr');
        return redirect()->back();
    }
}
