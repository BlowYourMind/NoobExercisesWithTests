<?php

use App\FortuneTeller;

test('Should return a fortune prediction', function(){
    $fortuneTeller = new FortuneTeller();
    expect($fortuneTeller->tell())->toEqual('Yes');
});