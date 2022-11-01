<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;

class MapController extends Controller
{
    public function map($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $user['id'])->get();
        $mapSpot = Spot::where('id', $id)->get();
        return view('home', compact('user','spot', 'mapSpot', 'id'));
    }
}
