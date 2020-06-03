<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::check()) {
            //return view('marketplace');
            //return redirect()->route('store');
            //return redirect()->route('store');
            return redirect('/store');

            // /return redirect()->route('store');


        }else{
            return view('home');
        }
    }

    public function showbases()
    {
        return view('bases');
    }
    
    public function showfaqs()
    {
        return view('faqs');
    }
}
