<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function count(int $number){

        if($number === 3) return "Fizz";
        if($number === 2) return "2";

        return "1";
    }

}