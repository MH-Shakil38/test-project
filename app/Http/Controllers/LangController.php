<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
//    public function lang()
//    {
//        return view('lang');
//    }
//
//    public function lang_change(Request $request)
//    {
//        App::setLocale($request->lang);
//        session()->put('lang_code',$request->lang);
//        return redirect()->back();
//    }
    public function lang(){
        return view('lang');
    }
    public function lang_change(Request $request){
        Session::put('local',$request->lang);
        return redirect()->back();
    }
}
