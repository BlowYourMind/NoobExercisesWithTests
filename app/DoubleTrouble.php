<?php

namespace App;

class DoubleTrouble
{
    public static function checkDoubleNames(array $names): array
    {
        return array_unique($names);
    }
}