<?php

namespace App\Models;

class County{
    public static function getDatas(){
        return [
            [
                "county"=>"india",
                "states"=>["delhi" ,"lucknow" ,"Kanpur" ,"Patna" ,"Ranchi","Kolkata" ,"Srinagar","Amritsar","Jaipur","Ahmedabad","Rajkot","Surat","Bhopal","Indore","Thane","Mumbai","Pune","Hyderabad","Bangalore","Chennai"],
            ]
        ];
    }

    public static function getStates($county){
        $countys = self::getDatas();
        foreach ($countys as $value) {
            if (strtolower($county) == $value["county"]) {
                return $value;
            }
        }
    }
}