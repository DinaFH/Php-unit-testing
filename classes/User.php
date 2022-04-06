<?php
namespace App;

use PhpParser\Node\Expr\Cast\String_;

class User {

    private $first_name,$last_name,$uemail,$uphone;

    public function setFirstName($firstName){
        $this->first_name=$firstName;
    }
    public function getFirstName(){
       return $this->first_name;
    }
    public function setLastName($lastName){
        $this->last_name=$lastName;
    }
    public function getLastName(){
       return $this->last_name;
    }
   
    public function setEmail($email){
        $this->uemail=$email;
    }
    public function getEmail(){
       return $this->uemail;
    }
    public function setPhone($phone){
        $this->uphone=$phone;
    }
    public function getPhone(){
       return $this->uphone;
    }
    
  
}
?>