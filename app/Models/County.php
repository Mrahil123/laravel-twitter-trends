<?php

namespace App\Models;

class County{
    public static function getDatas(){
        return [
            [
                "county"=>"india",
                "states"=>["nagpur","chennai"],
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