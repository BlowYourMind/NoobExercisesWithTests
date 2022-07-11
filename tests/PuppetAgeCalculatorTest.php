<?php

use App\PuppetAgeCalculator;

test("should return dog's age in dog years", function(){
    $puppetAgeCalculator = new PuppetAgeCalculator();
    expect($puppetAgeCalculator->convert(1))->toEqual("Your doggie is 7 years old in dog years!");
    expect($puppetAgeCalculator->convert(10))->toEqual("Your doggie is 70 years old in dog years!");
    expect($puppetAgeCalculator->convert(15))->toEqual("Your doggie is 105 years old in dog years!");

});