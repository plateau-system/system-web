<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chartRate()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }

    public function chartComparison()
    {
        $user = \Auth::user();

        return view('home', compact('user'));
    }
}
