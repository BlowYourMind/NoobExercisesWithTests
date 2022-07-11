<?php

use App\RockPaperScissors;

test("should return the winner of the game or 'Tie!' when there is no winner ",function (){
    $new = new RockPaperScissors();
    expect($new->start([["R", "P"], ["R", "S"], ["S", "P"]]))->toEqual("Abigail");
    expect($new->start([["R", "R"], ["S", "S"]]))->toEqual("Tie!");
    expect($new->start([["R", "P"], ["R", "P"], ["P", "R"]]))->toEqual("Benson");

});