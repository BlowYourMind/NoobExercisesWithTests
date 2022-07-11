<?php

namespace App;

class RockPaperScissors{
    private array $conditions = [
        'R' => ['S'],
        'P' => ['R'],
        'S' => ['P'],
    ];

    public function start(array $players ):string
    {   $winner = null;
        $abigailPoints = 0;
        $bensonPoints = 0;
        foreach ($players as $player) {
            if ($player[0] === $player[1]) {
                $winner = 'Tie!';
            } elseif (in_array($player[0], $this->conditions[$player[1]])) {
                $bensonPoints++;
            } else {
                $abigailPoints++;
            }
        }
        if($bensonPoints > $abigailPoints){
            $winner = "Benson";
        }
        elseif($bensonPoints == $abigailPoints){
            $winner= "Tie!";
        }
        else{
            $winner = "Abigail";
        }
            return $winner;
    }
}