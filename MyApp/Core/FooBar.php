<?php

namespace MyApp\Core;
  class FooBar{
    private $userInput;

    public function __construct(){

    }

    public function input($usrInput){
      $this->userInput = $usrInput;
      return $this;
    }

    public function output(){
      echo $this->userInput;
    }
  }
