<?php

namespace Kata;

class Kata
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

        if (strcmp(strlen($strTodoComa),strripos($strTodoComa,",")) == 0){
            return "Number excepted but EOF found";
        }

        $strTodoComa = explode(",",$strTodoComa);
        
        if (in_array("",$strTodoComa)){
            $frase = "Number expected but \n found at position ";
            return $frase.$posicion;
	}
	$value = array_sum(explode(",",$strTodoComa));
	return strval($value);
    }
    
    
    

}
