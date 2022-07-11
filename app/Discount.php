<?php

namespace App;

class Discount
{
    public static function makeDiscount(int $price, int $discount): float
    {
        return  $price - ($price * ($discount / 100));
    }
}