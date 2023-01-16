<?php

    class Realtor extends User {

        public $pIva;
        public $agency;
        public $telephone;

        public function __construct( $name , $lastname , $email , $address, $pIva, $agency, $telephone )
    {
        //father attributes (estensibilità)
        /*
        $this->name =$name;
        $this->lastname =$lastname;
        $this->email =$email;
        $this->address =$address;
        */


        //paerent attributes (polimorfismo)
        parent::__construct($name , $lastname , $email , $address);
        $this->pIva =$pIva;
        $this->agency =$agency;
        $this->telephone =$telephone;
       
    }

    }








?>