<?php
namespace  App;

class DigitalClock{
    public static function clockTime(int $sec1): string
    {
        $hours = 0;
        $min = 0;
        $seconds = 0;
        if ($sec1 > 3600) {
            $hours += intval($sec1 / 3600);
            $sec1 -= $hours * 3600;
        }
        if($sec1>=60) {
            $min += intval($sec1 / 60);
            $sec1 -= $min * 60;
        }
        $seconds += $sec1;
    if($hours>=24){
    $hours = 0;
}
        return "$hours:$min:$seconds";
    }
}