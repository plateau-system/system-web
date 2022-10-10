<?php

namespace App\Http\Controllers;

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
        ]);
        return view('home', compact('user'));
    } 
}