<?php

  class  User{

    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($username, $password){
      // echo 'Constructor Called';
      $this->username = $username;
      $this->password = $password;
    }
    public function register(){
      echo 'User Registered';
    }

    public function login(){
      // echo $username. ' is now logged in';
      
      $this->auth_user();
    }

    public function auth_user(){
      // echo $this->username. ' is authenticated';
      // echo $this->id;
    }

    public function __destruct(){
      // echo 'Destructor Called';
    }
 
  }
  $user = new User('minde','1234');
  // echo $user->username;
  // $user->register();
  // $user->login();