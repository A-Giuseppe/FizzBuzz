<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function count(int $number){

        if($number % 3 ===  0) return "Fizz";
        if($number === 5) return "Buzz";

        return strval($number);
    }

}