<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function count(int $number){

        if($this->isMultipleOf3($number)) return "Fizz";
        if($number === 5) return "Buzz";

        return strval($number);
    }


    public function isMultipleOf3(int $number): bool
    {
        return $number % 3 === 0;
    }

}