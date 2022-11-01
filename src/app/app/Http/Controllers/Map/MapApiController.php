<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;

class MapApiController extends Controller
{
    public function mapAll($id)
    {
        $mapSpot = Spot::where('users_id', $id)->get();

        return $mapSpot;
    }
}
