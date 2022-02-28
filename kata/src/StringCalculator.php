<?php

namespace Kata;

class StringCalculator
{
    function add($str)
    {
        if (empty($str)) {
            return '0';
        }
                
        if (empty(strpos($str,"\n")){
			$value = array_sum(explode(",",$str));
			return strval($value);
		}
		
		$posicion = strpos($str,"\n");
        $strTodoComa = str_replace("\n",",",$str);
        $strTodoComa = explode(",",$strTodoComa);
        
        if (in_array("",$strTodoComa)){
			$frase = "Number expected but \n found at position ";
			return $frase.$posicion;
		}
		$value = array_sum(explode(",",$strTodoComa));
		return strval($value);
    }
    
    
    

}
