<?php

use App\Kindergarten;

test("should reverses all the words in a sentence that start with a particular letter",function (){
    expect(Kindergarten::reverseWord("First nam to walk on the noom", "n"))->toEqual("First man to walk on the moon");
    expect(Kindergarten::reverseWord("reteP ate reppep", "r"))->toEqual("Peter ate pepper");
    expect(Kindergarten::reverseWord("I dekcip delkcip onions for supper", "d"))->toEqual("I picked pickled onions for supper");

});