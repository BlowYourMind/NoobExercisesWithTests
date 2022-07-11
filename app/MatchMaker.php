<?php

namespace App;

class MatchMaker
{
    public static function makePairs(array $women, array $men): array | string
    {
        $arrayOfPairs = [[],[]];
        if (count($men) > count($women) || count($men) < count($women)) {
            return "Cupid is on vacation";
        }
        for ($i = 0; $i <count($men); $i++) {
            array_push($arrayOfPairs[$i], $women[$i], $men[$i]);

        }
        return $arrayOfPairs;
    }
}