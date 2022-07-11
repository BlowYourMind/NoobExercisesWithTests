<?php

namespace App;

class ObjectPro{
    private static array $final = [];
    private static array $keys = [];
    private static array $values = [];
    private static string $key;
    private static $value;

    public function __construct(string $key, $value)
{
    ObjectPro::$key = $key;
    ObjectPro::$value = $value;
}

    public static function makeAllGood(ObjectPro $object) {
        array_push($object::$keys,$object::$key);
        array_push($object::$values,$object::$value);
    }
    public static function forEveryOne(array $values){
        foreach ($values as $value){
            ObjectPro::makeAllGood($value);
        }
        array_push(ObjectPro::$final,ObjectPro::$keys,ObjectPro::$values);
        return ObjectPro::$final;
    }


}