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
        return view('home');
    }

    public function chart()
    {
        return view('home');
    }

    public function simulator()
    {
        return view('home');
    }

    public function information()
    {
        return view('home');
    }

    public function setting()
    {
        return view('home');
    }

    public function help()
    {
        return view('home');
    }


}
