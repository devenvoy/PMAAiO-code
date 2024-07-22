<?php

include 'utils/constants.php';

// class
class User{

    // property
    public $name;
    public $email;
    private $password;

    // constructor 

    public function __construct($name = null,$email = null,$password = null){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        echo "constructor run" . newline;
    }

    // can not have overloaded constructor in php
    // public function __construct(){
       
    // }


    // method - functions belong to it  class

    function set_name($name){
        $this->$name = $name;
    }

    function set_password($password){
        $this->password = $password;
    }

}


// object 
$user1 = new User("dev","dev@gamail.com");
$user2 = new User();

// accessing property and methods
$user1->name = "Devansh";
$user2->name = "John";
$user2->set_password("john123");

var_dump($user1);
echo newline . newline;
var_dump($user2);


# Inheritance 
class Employee extends User{
    public $title;
    public function __construct($name = null, $title = null ,$email = null, $password = null){
        // parent is  similar to super in java 
        parent::__construct($name, $email, $password);
        $this->$title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}


echo newline;
echo newline;
$emp1 = new Employee(name:"sara",title: "manager", email:"sara@gmail.com",password:"gngbdn");
echo $emp1->getTitle() . newline;
var_dump($emp1);