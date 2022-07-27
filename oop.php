<?php

class User
{
    // Properties are attribute that belongs to a class
    // Access modifiers: public, private and protected
    // public - can be access from anywhere
    // private - can only be accessed from inside the class
    // Protected: can only be access from inside the class and by inheriting the class
    public $name;
    public $email;
    public $password;

    // A contructor is a function that runs when an object is created

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

// Instatiate a user object
$user1 = new User('Brad', 'Brad@gmail.com', 'password');
$user2 = new User('Adedeji', 'adedeji@gmail.com', 'password');

// echo $user1->email;
// echo $user2->name;


// Inheritance

class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Adedeji', 'adedejitewogbade2@gmail.com', 'password', 'Junior developer');

echo $employee1->get_title();
