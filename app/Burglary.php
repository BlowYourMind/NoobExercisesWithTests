<?php

namespace App;
class Burglary
{
    private static ?string $name;
    private static ?int $value;
    public function __construct(int $value = null, string $name = null)
    {
        Burglary::$name = $name;
        Burglary::$value = $value;
    }

    public static function checkRobbedItems(Burglary $burglary)
    {
        $sum = 0;
            if (Burglary::$name != null) {
                $sum += Burglary::$value;
        }
            else{
                return "Lucky you!";
            }
        return $sum;
    }
}