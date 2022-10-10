<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;

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
        $spot = Spot::where('users_id', $user['id'])->get();
        return view('home', compact('user','spot'));
    }

    public function top($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $id)->get();
        return view('home', compact('user','spot'));
    }

    public function chart($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $id)->get();
        return view('home', compact('user','spot'));
    }

    public function simulator($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $id)->get();
        return view('home', compact('user','spot'));
    }

    public function information($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $id)->get();
        return view('home', compact('user','spot'));
    }

    public function setting($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $id)->get();
        return view('home', compact('user','spot'));
    }

    public function help($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $id)->get();
        return view('home', compact('user','spot'));
    }


}
