<?php

class house {

    public $address;
    public $contract;
    public $typology;
    public $floor;
    public $squareMeters; //set it*** //get it***
    public $number_of_Rooms; //set it*** //get it
    public $balcony;
    public $furnished;
    public $energyClass;
    public $price;//set it*** //get it


    public function __construct($address, $contract, $typology, $floor=0, $energyClass)
    {
        $this->address =$address;
        $this->contract =$contract;
        $this->typology =$typology;
        $this->floor =$floor;
        $this->energyClass =$energyClass;
        
    }

    //Set Methods/////////////////////////////////////////////////////


    public function setSquareMeters($squareMeters) {
        if (is_int($squareMeters) && $squareMeters >= 35 && $squareMeters < 2000){
            $this->squareMeters = $squareMeters;
        } else{
            die();
        }
    }

    public function setNumber_of_Rooms($number_of_Rooms) {
        if (is_int($number_of_Rooms) && $number_of_Rooms >= 1 && $number_of_Rooms < 20){
            $this->number_of_Rooms = $number_of_Rooms;
        } else{
            die();
        }
    }

    public function setPrice($price) {
        if (is_int($price) && $price >= 400 && $price < 500000){
            $this->price = $price;
        } else{
            die();
        }
    }

    //Get Methods///////////////////////////////////////////////

    public function getSquareMeters() {
        return $this->squareMeters; 
      } 

    public function getNumberOfRooms() {
        return $this->number_of_Rooms; 
      }

    public function getPrice() {
        return $this->price; 
      }






}