<?php

use App\DoubleTrouble;

test("should remove duplicate values from array", function (){
    expect(DoubleTrouble::checkDoubleNames(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
    expect(DoubleTrouble::checkDoubleNames(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
    expect(DoubleTrouble::checkDoubleNames(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
});