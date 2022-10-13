<?php

namespace App\Http\Controllers\Chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;

class ChartApiController extends Controller
{
    public function chartAll($id)
    {
        $chartSpot = Spot::where('id', $id)->get();

        // day
        $chartSpotDay = explode(',', $chartSpot[0]['spots_day']);
        $chartSpotDayInt = array_map('floatval', $chartSpotDay);
        array_pop($chartSpotDayInt);
        $chartSpotDayAll = [$id, $chartSpot[0]['spots_name'],];
        $personDay = [];
        $bicycleDay = [];
        $carDay = [];
        $motorcycleDay = [];

        for ($i=0; $i<count($chartSpotDayInt); $i=$i+4) {
            $person = $chartSpotDayInt[$i];
            $bicycle = $chartSpotDayInt[$i + 1];
            $car = $chartSpotDayInt[$i + 2];
            $motorcycle = $chartSpotDayInt[$i + 3];

            $all = [$person, $bicycle, $car, $motorcycle];
            array_push($personDay, $person);
            array_push($bicycleDay, $bicycle);
            array_push($carDay, $car);
            array_push($motorcycleDay, $motorcycle);
        }

        // month
        $chartSpotMonth = explode(',', $chartSpot[0]['spots_month']);
        $chartSpotMonthInt = array_map('floatval', $chartSpotMonth);
        array_pop($chartSpotMonthInt);
        $chartSpotMonthAll = [$id, $chartSpot[0]['spots_name'],];
        $personMonth = [];
        $bicycleMonth = [];
        $carMonth = [];
        $motorcycleMonth = [];
  
        for ($i=0; $i<count($chartSpotMonthInt); $i=$i+4) {
            $person = $chartSpotMonthInt[$i];
            $bicycle = $chartSpotMonthInt[$i + 1];
            $car = $chartSpotMonthInt[$i + 2];
            $motorcycle = $chartSpotMonthInt[$i + 3];

            $all = [$person, $bicycle, $car, $motorcycle];
            array_push($personMonth, $person);
            array_push($bicycleMonth, $bicycle);
            array_push($carMonth, $car);
            array_push($motorcycleMonth, $motorcycle);
        }


        $day = [
            'person' => $personDay,
            'bicycle' => $bicycleDay,
            'car' => $carDay,
            'motorcycle' => $motorcycleDay,
        ];

        $month = [
            'person' => $personMonth,
            'bicycle' => $bicycleMonth,
            'car' => $carMonth,
            'motorcycle' => $motorcycleMonth,
        ];

        return response()->json([
            'id' => $id,
            'spots_name' => $chartSpot[0]['spots_name'],
            'day' => $day,
            'month' => $month,
        ]);
    }
}
