<?php
namespace App;

use SebastianBergmann\Type\FalseType;

class Factorial{


    public static function fact($number) { 

        if(!is_float($number)&&$number>=0&&is_numeric($number)){

        if ($number==0||$number==1) { 
            return 1; 
        } 
    
        else { 
            return $number*self::fact($number-1); 
        }
    }
    else {return null;}
}





}








?>