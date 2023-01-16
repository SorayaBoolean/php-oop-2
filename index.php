<?php


require_once __DIR__ .'/House.php';
require_once __DIR__ .'/User.php';
require_once __DIR__ .'/Realtor.php';

$user1 = new User("Soraya","Khyabani", "soraya@gmail.com","Via di Sandro Pertini");
var_dump($user1);

$user2 = new Realtor("Manolo","Palestini", "manolo@gmail.com","Via di Sandro Pertini","1234567890", "Tecnocasa", "3279320478");
var_dump($user2);

$user3 = new Realtor("Gianna","Nannini", "gianna@gmail.com","Via Roma","8901234567", "Tecnocasa", "3279320668");
var_dump($user3);



$house1 = new House ("Via Sandro Pertini","Affitto", "appartamento", "first", "A");
$house1->setSquareMeters(70);
$house1->setNumber_of_Rooms(5);
$house1->setPrice(600);

var_dump($house1);


?>