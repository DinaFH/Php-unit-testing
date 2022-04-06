<?php 
use App\User;

class UserTest extends PHPUnit\Framework\TestCase {

   private static $user;

    public   static function setUpBeforeClass():void{
        self::$user=new User();
    }

   
    public function testCanGetFirstName(){
       self::$user->setFirstName('Dina');
        $this->assertEquals(self::$user->getFirstName(),'Dina');
    }
    public function testCanGetLastName(){
       self::$user->setLastName('Harb');
        $this->assertEquals(self::$user->getLastName(),'Harb');
    }
    public function testCanGetEmail(){
        self::$user->setEmail('dina@gmail.com');
         $this->assertEquals(self::$user->getEmail(),'dina@gmail.com');
     }
     public function testCanGetPhone(){
        self::$user->setPhone('1234');
         $this->assertEquals(self::$user->getPhone(),'1234');
     }
}