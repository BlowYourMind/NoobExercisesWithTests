<?php

use App\Exo;

test("should return the given text repeated n times",function (){
    expect(Exo::repeatExo("ab", 3))->toEqual("ababab");
    expect(Exo::repeatExo("kiwi", 1))->toEqual("kiwi");
    expect(Exo::repeatExo("cherry", 2))->toEqual("cherrycherry");

});