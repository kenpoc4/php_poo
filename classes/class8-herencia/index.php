<?php

class User {
    
    public $name;

    public function __construct($name) {
        
        $this->name = $name;
    }

    public function getName() {
        
        return $this->name;
    }

    public function getName2() {

        return "Mi nombre es {$this->name}";
    }
}

$user = new User('Kenny');
echo "{$user->getName()} {$user->getName2()}";

echo "<br>";

class Admin extends User {
    
    // ...
}

$admin = new Admin('Jonh Cena');
echo $admin->getName2();