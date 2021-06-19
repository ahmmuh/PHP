<?php
class Person {
    public $name;
    public $email;
    public $age;
    
    public function __construct($name,$email,$age){
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
       
    }

public function getName () {
 return  $this->name;
}
public function getEmail () {
 return  $this->email;
}
public function getAge () {
 return  $this->age;
}
}
?>