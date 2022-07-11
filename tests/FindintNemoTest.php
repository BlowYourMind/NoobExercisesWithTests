<?php

use App\FindingNemo;

test("should return a string 'I found Nemo at X!', X being the index value of the word 'Nemo', if 'Nemo' is found", function (){
    expect(FindingNemo::findTheFish("I am finding Nemo !"))->toEqual("I found Nemo at 3!");
    expect(FindingNemo::findTheFish("Nemo is me"))->toEqual("I found Nemo at 0!");
    expect(FindingNemo::findTheFish("I Nemo am"))->toEqual("I found Nemo at 1!");
});
test("should return a string 'I can't find Nemo :(', if 'Nemo' is not found", function(){
    expect(FindingNemo::findTheFish("I am searching"))->toEqual("I can't find Nemo :(");
});