<?php

namespace App\Http\Controllers\Spot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;

class SpotApiController extends Controller
{
    public function spotAll($id)
    {
        $spot = Spot::where('users_id', $id)->get();
        $dataAll = [];

        for ($i=0; $i<count($spot); $i++) {
            $day = [];
            $personDay = [];
            $bicycleDay = [];
            $carDay = [];
            $motorcycleDay = [];
            
            // day
            $spotDay = explode(',', $spot[$i]['spots_day']);
            $spotDayInt = array_map('floatval', $spotDay);
            array_pop($spotDayInt);

            for ($i2=0; $i2<count($spotDayInt); $i2=$i2+4) {
                $person = $spotDayInt[$i2];
                $bicycle = $spotDayInt[$i2 + 1];
                $car = $spotDayInt[$i2 + 2];
                $motorcycle = $spotDayInt[$i2 + 3];

                array_push($personDay, $person);
                array_push($bicycleDay, $bicycle);
                array_push($carDay, $car);
                array_push($motorcycleDay, $motorcycle);
            }
            
            $all = [
                'person' => $personDay,
                'bicycle' => $bicycleDay,
                'car' => $carDay,
                'motorcycle' => $motorcycleDay
            ];                

            $data = [
                'id' => $spot[$i]['id'],
                'spots_address' => $spot[$i]['spots_address'],
                'spots_latitude' => $spot[$i]['spots_latitude'],
                'spots_longitude' => $spot[$i]['spots_longitude'],
                'spots_url' => $spot[$i]['spots_url'],
                'spots_day' => $all,
            ];
            array_push($dataAll, $data);
        }

        return $dataAll;
    }
}
