<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return[
            new Middleware('auth', only:['dashboard'])
        ];
    }

    public function home(){
        $travels = Travel::where('is_accepted', true)->orderBy('created_at','desc')->take(3)->get();
        return view('welcome',compact('travels')); 
    }
    public function searchTravel(Request $request)
    {
        $query= $request->input('query');
        $travels= Travel::search($query)->where('is_accepted', true)->paginate(10);
        return view('travel.searched', ['travels'=> $travels,'query'=>$query]);
    }


    public function dashboard(){
        return view('auth.dashboard');
    }

    public function contactus(){
        return view('travel.contactus');
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
