<?php

use App\DigitalClock;


test("should convert seconds to a time string in format hh:mm:ss",function (){
    expect(DigitalClock::clockTime(5052))->toEqual("1:24:12");
    expect(DigitalClock::clockTime(61201))->toEqual("17:0:1");
    expect(DigitalClock::clockTime(87000))->toEqual("0:10:0");

});