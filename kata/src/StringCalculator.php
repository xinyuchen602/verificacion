<?php

namespace Kata;

class StringCalculator
{
    function add($number1)
    {
        if (empty($number1)) {
            return '0';
        }
        
        $value = array_sum(explode(",",$str));
        return strval($value);
    }
    
    
    

}
