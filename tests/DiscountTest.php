<?php

use App\Discount;

test("should return the final price after the discount", function(){
    expect(Discount::makeDiscount(1500, 50))->toEqual(750);
    expect(Discount::makeDiscount(89, 20))->toEqual(71.2);
    expect(Discount::makeDiscount(100, 75))->toEqual(25);
});
