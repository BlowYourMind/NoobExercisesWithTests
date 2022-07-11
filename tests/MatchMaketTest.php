<?php

use App\MatchMaker;

test("should return a new array of arrays with couples, if given array sizes match and 'Cupid is on vacation' if not ", function (){
    expect(MatchMaker::makePairs(["Elise", "Mary"], ["John", "Rick"]))->toEqual([["Elise", "John"], ["Mary", "Rick"]]);
    expect(MatchMaker::makePairs(["Ana", "Amy", "Lisa"], ["Bob", "Josh"]))->toEqual("Cupid is on vacation");
});