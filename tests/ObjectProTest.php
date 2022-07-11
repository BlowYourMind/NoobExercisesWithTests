<?php

use App\ObjectPro;

test("should return the keys and values of object as separate arrays",function (){
    expect(ObjectPro::forEveryOne(
        [new ObjectPro("a", 1), new ObjectPro("b",2),new ObjectPro("c",3)]
    ))->toEqual(
        [["a", "b", "c"], [1, 2, 3]]
    );
});