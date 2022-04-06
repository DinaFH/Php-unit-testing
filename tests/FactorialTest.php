<?php

use App\Factorial;

class FactorialTest extends PHPUnit\Framework\TestCase {

//1
public function testFactorialZero(){
  return  $this->assertTrue(
   Factorial::fact(0)==1);       
}
//2
public function testFactorialOne(){
  return  $this->assertTrue(
   Factorial::fact(1)==1);       
}
//3
public function testFactorialFive(){
  return  $this->assertTrue(
   Factorial::fact(5)==120);       
}
//4
public function testFactorialRandom(){
    //$number=rand()+3;
    $number=rand(4,8);
   return $this->assertTrue(
   Factorial::fact($number)==$number*Factorial::fact($number-1));       
}
 //5
public function testFactorialNegativeThree(){
   return  $this->assertTrue(
  Factorial::fact(-3)==null);       
 }
 //6
 public function testFactorialAbc(){
  return  $this->assertTrue(
   Factorial::fact('abc')==null);       
}
//7
public function testFactorialFalse(){
   return  $this->assertTrue(
   Factorial::fact(false)==null);       
 }
//8
public function testFactorialOneAndHalf(){
   return $this->assertTrue(
    Factorial::fact(1.5)==null);       
}


}




//this file name must contain "Test" at the end of its name.
//Function names are camelCase.
//file names Capital.
//folder names small.

//autoload or bootstrabing 
// in cmd composer dump-autoload


?>