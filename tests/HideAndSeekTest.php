<?php

use App\HideAndSeek;

test("should return all lowercase letters",function() {
    $hideAndSeek = new HideAndSeek();
    expect($hideAndSeek->finder("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
    expect($hideAndSeek->finder("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
    expect($hideAndSeek->finder("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
});