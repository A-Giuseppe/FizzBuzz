<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function count(int $number){

        if($number === 3) return "Fizz";

        return strval($number);
    }

}