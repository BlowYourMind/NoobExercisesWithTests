<?php

namespace App;

class FindingNemo {
    public static function findTheFish(string $sentence):string{
        $split = explode(' ',$sentence);
        foreach ($split as $key =>$item){
            if($item === "Nemo"){
                return "I found Nemo at $key!";
            }
        }
        return  "I can't find Nemo :(";
    }
}