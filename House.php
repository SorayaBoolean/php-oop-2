<?php

class house {

    public $address;
    public $contract;
    public $typology;
    public $floor;
    public $squareMeters; //set it***
    public $number_of_Rooms; //set it***
    public $balcony;
    public $furnished;
    public $energyClass;
    public $price;//set it***


    public function __construct($address, $contract, $typology, $floor=0, $energyClass)
    {
        $this->address =$address;
        $this->contract =$contract;
        $this->typology =$typology;
        $this->floor =$floor;
        $this->energyClass =$energyClass;
        
    }


    public function setsquareMeters($squareMeters) {
        if (is_int($squareMeters) && $squareMeters >= 35 && $squareMeters < 2000){
            $this->squareMeters = $squareMeters;
        } else{
            die();
        }
    }

    public function number_of_Rooms($number_of_Rooms) {
        if (is_int($number_of_Rooms) && $number_of_Rooms >= 1 && $number_of_Rooms < 20){
            $this->number_of_Rooms = $number_of_Rooms;
        } else{
            die();
        }
    }

    public function price($price) {
        if (is_int($price) && $price >= 1 && $price < 20){
            $this->price = $price;
        } else{
            die();
        }
    }






}