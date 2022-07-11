<?php

namespace App;

class LargestSwap{
    public static function digitSwap(int $number): bool
    {
        $firstNum = null;
        if (strlen($number) == 2) {
            $firstNum = strrev($number);
        }
        if ($firstNum > $number) return false;

        return true;
    }
}