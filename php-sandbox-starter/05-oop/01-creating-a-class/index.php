<?php

class User {
    //Properties decleration
    public $name;
    public $email;

    // Properties initialization
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login() {
        echo $this->name .  ' The user logged in';
    }
}

// instantiate a new object

$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

// var_dump($user1);

?>