<?php
//error_reporting(E_ALL);
include "./building/city.php";
include "./building/village.php";


$cityClass = new City();
$cityClass->setAddress("Ленина", 23);
echo $cityClass->getType();

$cityClass->setFloor(2);
$cityClass->setElevator(1);
$cityClass->setEntrance(2);

echo $cityClass->getType();
echo $cityClass->getInfo();


$villageClass = new Village();
$villageClass->setAddress("Маршала Жукова", 3);
echo $villageClass->getType();

$villageClass->setFloor(2);
$villageClass->setArea(10); 

echo $villageClass->getType();
echo $villageClass->getInfo();