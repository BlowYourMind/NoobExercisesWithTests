<?php

use App\Burglary;

test("should return the total value of stolen items", function(){
    expect(Burglary::checkRobbedItems(new Burglary(30,"tv"))+Burglary::checkRobbedItems(new Burglary(100,"tv")))->toEqual(130);
    expect(Burglary::checkRobbedItems(new Burglary(30,"tv")))->toEqual(30);
});
test("should return a string 'Lucky you!', if nothing was stolen", function (){
    expect(Burglary::checkRobbedItems(new Burglary()))->toEqual('Lucky you!');
});