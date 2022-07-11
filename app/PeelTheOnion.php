<?php

namespace App;

class PeelTheOnion{
    public static function convertArray(array $input): array
    {
        $newArr = [];
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if (($j !== 0 && $j !== 3) && ($i !== 0 && $i !== 3)) {
                    array_push($newArr,$input[$i][$j]);
                }
            }
        }
        return $newArr;
    }
}