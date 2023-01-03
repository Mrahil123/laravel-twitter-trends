<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TrendController extends Controller
{
    public function index()
    {   
        $countys = ["India","Japan","United State"];
        return view("welcome",[
            "countys"=>$countys
        ]);
    }

    // county view
    public function county($county)
    {   
        if(Cache::has($county)){
            $trends = json_decode(Cache::get($county));
        }
        else{
            $trends = file_get_contents("https://rahilapis.vercel.app/twitter-trends?c=" . strtolower($county));
            Cache::add($county,$trends,1800);

            $trends = json_decode(Cache::get($county));
        }
        return view("county",[
            "county"=>$county,
            "trends"=>$trends,
            "c_datas"=>County::getStates($county),
        ]);
    }

    // State View
    public function state($county ,$state)
    {
        // Cache::flush();
        if(Cache::has($state)){
            $trends = json_decode(Cache::get($state));
        }
        else{
            $trends = file_get_contents("https://rahilapis.vercel.app/twitter-trends?c=" . strtolower($county) . "&s=" . strtolower($state));
            Cache::add($state,$trends,1800);

            $trends = json_decode(Cache::get($state));
        }

        return view("state",[
            "state"=>$state,
            "trends"=>$trends
        ]);
    }
    
}
