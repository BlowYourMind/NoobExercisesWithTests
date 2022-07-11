<?php

namespace  App;
class BoxVolume
{
    public static function volume(array $sizes): int
    {
        $total = 0;
        if(count($sizes)==1){
            $total += array_product($sizes);
            }
        else{
            foreach ($sizes as $size) {
                $total += array_product($size);

            }
        }
        return $total;
    }
}