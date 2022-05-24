<?php

/*
    PHP can be written procedurally or
    object oriented way. OOP has classes that
    hold "properties" and "methods". Objects can be created
    from classes.
*/

class User
{
    // Properties are attributes that belong to a class
    /*
        Access modifiers: public, private, protected
        public - can be accessed anywhere
        private - only within the class
        protected - only within the class by inheriting classes
     */
    public $name;
    public $email;
    public $password;

    // Constructor is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Methods are functions that belong to a class

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}


// Instantiate a user object
// $user1 = new User('Kevin', 'kevin123@gmail.com', 'password1');
// $user2 = new User('Michelle', 'Michelle@gmail.com', 'password2');


// echo $user1->email;
// echo $user2->name;

// Inheritence
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

$employee1 = new Employee('Kevin', 'kevin@gmail.com', 'password3', 'Web Developer');


echo $employee1->get_title();