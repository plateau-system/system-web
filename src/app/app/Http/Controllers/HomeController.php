<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }

    public function chart()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }

    public function simulator()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }

    public function information()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }

    public function setting()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }

    public function help()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }


}
