<?php

namespace Kata;

class Kata
{
    function add($str)
    {
        if (empty($str)) {
            return '0';
        }
        $delimiter = substr($str,2,1);  
        $str = substr($str, 4);
        
        for($i=0;$i<strlen($str);$i++){
            if(is_numeric($str[$i]) or $str[$i] == $delimiter or $str[$i] == "\n"){
                
            }
            else{
                return $delimiter." expected but ".$str[$i]." found at position ".$i;
            }
        }

        if (empty(strpos($str,"\n")){
            $value = array_sum(explode($delimiter,$str));
            return strval($value);
	}
		
	$posicion = strpos($str,"\n");
        $strTodoDel = str_replace("\n",$delimiter,$str);

        if (strcmp(strlen($strTodoDel)-1,strripos($strTodoDel,$delimiter)) == 0){
            return "Number excepted but EOF found";
        }

        $strTodoDel = explode($delimiter,$strTodoDel);
        
        if (in_array("",$strTodoDel)){
            $frase = "Number expected but \n found at position ";
            return $frase.$posicion;
	}
	$value = array_sum($strTodoDel);
	return strval($value);
    }

    public function separateLine($str)
    {
        return "//" == substr($str,0,2);
    }

    public function separateN($str)
    {
        return "\n" == substr($str,3,1);
    }

}
