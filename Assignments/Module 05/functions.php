<?php

//Task 03

class Person {
    private $name, $email;

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
    
    // public function DisplayName() {
    //     echo $this->name;
    // }

    // public function DisplayEmail() {
    //     echo $this->email;
    // }
    
}

$singlePerson = new Person();