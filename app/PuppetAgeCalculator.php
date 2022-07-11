<?php

namespace App;

class PuppetAgeCalculator
{
    public function convert(int $age): string
    {
        (int)$result = $age * 7;
        return "Your doggie is $result years old in dog years!";
    }
}
