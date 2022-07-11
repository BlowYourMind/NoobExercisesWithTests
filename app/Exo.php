<?php


namespace App;

class Exo{
    public static function repeatExo(string $word, int $times):string
    {
        $array = [];
        for ($i = 0; $i < $times; $i++) {
            $array[$i]= $word;
        }
        return implode($array);
    }
}