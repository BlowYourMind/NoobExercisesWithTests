<?php

namespace App;

class WarOfNumbers{
    public static function winner(array $numbers): string
    {

        $oddNum = 0;
        $evenNum=0;
        foreach ($numbers as $number){
            if($number%2 ==0){
                $evenNum+=$number;
            }
            else{
                $oddNum+=$number;
            }
        }
        if($oddNum > $evenNum){
            $result = $oddNum - $evenNum;
            return "Odd numbers win by $result";
        }
        elseif($evenNum>$oddNum){
            $result = $evenNum - $oddNum;
            return  "Even numbers win by $result";
        }
        else{
            return "There are no winners";
        }
    }
}