<?php

    class User {

        public $name;
        public $lastname;
        public $email;
        public $address;



    public function __construct( $name , $lastname , $email , $address)
    {
        $this->name =$name;
        $this->lastname =$lastname;
        $this->email =$email;
        $this->address =$address;
       
    }


    }







?>