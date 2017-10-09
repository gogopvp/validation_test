<?php

class Validation {
    public $mail;
    public $number;
    const PATTERN = "/^\+373\d{2}\d{3}\d{3}$/";
    public $error;

    function __construct($mail,$number){
        $this->mail = $mail;
        $this->number = $number;
    }
    function emailValidation(){
        if(!filter_var($this->mail, FILTER_VALIDATE_EMAIL)){
            $this->error[]='email validation was not successful<hr>';
            return false;
        }else{
            return true;
        }
    }
    function phoneNumberValidation(){
        if(preg_match(self::PATTERN, $this->number)){
            $this->error[]='phone number validation was not successful<hr>';
            return false;
        }else{
            return true;
        }
    }

    function getError(){
        return $this->error;
    }

}

