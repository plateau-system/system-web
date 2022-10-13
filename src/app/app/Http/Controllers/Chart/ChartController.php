<?php

namespace App\Http\Controllers\Chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;

class ChartController extends Controller
{
    public function chart($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $user['id'])->get();
        $chartSpot = Spot::where('id', $id)->get();
        return view('home', compact('user','spot', 'chartSpot', 'id'));
    }
}
