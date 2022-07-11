<?php

namespace  App;

class SecretSociety
{
    public static function takeFirstLetter(array $people):string
    {
        $firstLetters = [];
        foreach ($people as $person){
            array_push( $firstLetters,substr($person,0,1));
        }
        sort($firstLetters);
        return implode ($firstLetters);
    }
}