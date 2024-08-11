<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller 
{
    public function index()
    {
        $travel_to_check = Travel::where('is_accepted', null)->first();
        return view('revisor.index', compact('travel_to_check'));  
    }

    public function accept(Travel $travel)
    {
        $travel->setAccepted(true);
        return redirect()->back()->with('message', "Hai accettato l'articolo $travel->title");
        // return redirect()->back()->with('messageA');
    }

    public function reject(Travel $travel)
    {
        $travel->setAccepted(false);
        return redirect()->back()->with('message',"Hai rifiutato l'articolo $travel->title");
        // return redirect()->back()->with('messageD');
    }
    public function becomeRevisor()
    {
        Mail::to('eca@travel.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('sent','Richiesta inviata con successo');
        // return redirect()->route('homepage')->with('sentR');

    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor',['email'=>$user->email]);
        return redirect()->back();
    }
}
