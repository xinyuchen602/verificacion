<?php

namespace Kata;

class StringCalculator
{
    function add($number1)
    {
        if (empty($number1)) {
            return '0';
        }
        
        $value = array_sum(explode(",",$number1));
        return strval($value);
    }
    
    
    

}
