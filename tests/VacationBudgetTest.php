<?php

use App\VacationBudget;

test("should return the sum of people's budgets",function (){

    expect(VacationBudget::calculate([
            new VacationBudget("John",21,23000),
            new VacationBudget("Steve",32,40000),
            new VacationBudget("Martin",16,2700)]
    ))->toEqual(65700);
    expect(VacationBudget::calculate([
            new VacationBudget("John",21,29000),
            new VacationBudget("Steve",32,32000),
            new VacationBudget("Martin",16,1600)]
    ))->toEqual(62600);
    expect(VacationBudget::calculate([
            new VacationBudget("John",21,0),
            new VacationBudget("Steve",32,1200),
            new VacationBudget("Martin",16,1200)]
    ))->toEqual(2400);
});