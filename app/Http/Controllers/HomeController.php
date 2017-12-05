<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function landing()
    {
        if (Auth::check()) {
            return redirect('/home');
        } else {
            return view('landing');
        }
        // return view('landing'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home')
            ->with('css', '')
            ->with('title', 'Recipes');
    }
    
}
