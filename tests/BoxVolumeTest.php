<?php

use App\BoxVolume;

test("should return sum of volumes of all boxes", function (){
    expect(BoxVolume::volume([[4, 2, 4], [3, 3, 3], [1, 1, 2], [2, 1, 1]]))->toEqual(63);
    expect(BoxVolume::volume([[2, 2, 2], [2, 1, 1]]))->toEqual(10);
    expect(BoxVolume::volume([[1, 1, 1]]))->toEqual(1);
});