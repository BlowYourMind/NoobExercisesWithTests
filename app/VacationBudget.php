<?php

namespace App;

class VacationBudget{
    private static  string $name;
    private static int $age;
    protected  int $number;

    public function __construct(string $name, int $age, int $number)
    {
        VacationBudget::$name = $name;
        VacationBudget::$age = $age;
        $this->number = $number;
    }

    public static function getAge(): int
    {
        return VacationBudget::$age;
    }

    public static function getName(): string
    {
        return VacationBudget::$name;
    }

    public function getNumber(): int
    {
        return $this->number;
    }
    public static function calculate (array $people):int{
        $budget = 0;
        foreach ($people as $person){
            $budget+=$person->getNumber();
        }
        return  $budget;
    }

}
