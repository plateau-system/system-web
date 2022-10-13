<?php

namespace App\Http\Controllers\Spot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;

class SpotController extends Controller
{
    public function spotStore(Request $request)
    {
        $data = $request->all();
        $user = \Auth::user();
        $spotAll = Spot::where('users_id', $data['user_id'])->get();
        // 外部のAPIから緯度経度を取得        
        $query = $data['address'];
        $query = urlencode($query);
        $url = "http://www.geocoding.jp/api/";
        $url.= "?v=1.1&q=".$query;
        $line="";
        $fp = fopen($url, "r");
        while(!feof($fp)) {
            
            $line.= fgets($fp);
        }
        fclose($fp);
        $xml = simplexml_load_string($line);
        $insertLat= (string) $xml->coordinate->lat;
        $insertLong = (string) $xml->coordinate->lng;

        Spot::insertGetId([
            'spots_name' => $data['name'],
            'users_id' => $data['user_id'], 
            'spots_address' => $data['address'],            
            'spots_latitude' => $insertLat,            
            'spots_longitude' => $insertLong, 
            'spots_explanation' => $data['explanation'],            
            'spots_url' => $data['url'],
            'spots_status' => 0,
            'spots_day' => 'None',
            'spots_week' => 'None',
            'spots_month' => 'None'
        ]);

        $spot = Spot::where('users_id', $user['id'])->get();
        
        return view('home', compact('user', 'spot'));
    } 

    public function spotDelete($id)
    {
        $user = \Auth::user();
        $spotDelete = Spot::where('id', $id)->delete();
        $spot = Spot::where('users_id', $user['id'])->get();
        
        return view('home', compact('user', 'spot'));
    }

    public function spotStart($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $user['id'])->get();
        $spotStart = Spot::where('id', $id)->update(['spots_status' => 1]);

        return view('home', compact('user', 'spot'));
    }

    public function spotStop($id)
    {
        $user = \Auth::user();
        $spot = Spot::where('users_id', $user['id'])->get();
        $spotStart = Spot::where('id', $id)->update(['spots_status' => 0]);

        return view('home', compact('user', 'spot'));
    }
}
