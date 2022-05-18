<?php

class User{
    
    private $code;
    private $user;
    private $password;
    private $name;
    private $lastName;

    //getter
    public function getCode(){
        return $this->code;   
    }
    public function getUser(){
        return $this->user;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    //setters
    public function setCode($code){
        $this->code = $code;
    }
    public function setUser($user){
        $this->user = $user;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setName($Name){
        $this->name = $Name;
    }
    public function setLastName($LastName){
        $this->lastName = $LastName;
    }
}


?>