<?php

use App\LargestSwap;

test("should return true if it's the largest of two possible digit swaps, false if not", function (){
    expect(LargestSwap::digitSwap(27))->toEqual(false);
    expect(LargestSwap::digitSwap(43))->toEqual(true);
    expect(LargestSwap::digitSwap(14))->toEqual(false);

});