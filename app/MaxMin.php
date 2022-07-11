<?php

namespace App;

class MaxMin{
    public static function checkMaxMin(array $numbers): array
    {
        $resultArray = [];
        array_push($resultArray, min($numbers), max($numbers));
        return $resultArray;
    }
}