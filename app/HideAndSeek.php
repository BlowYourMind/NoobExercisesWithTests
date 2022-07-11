<?php

namespace App;

class HideAndSeek
{
    public static function finder(string $word):string
    {
        $word1 = str_split($word);
        $result = [];
        foreach ($word1 as $letter) {
            if (!ctype_upper($letter)) {
                array_push($result,$letter);
            }
        }
        return implode($result);
    }
}
