<?php
require 'Car.php';
require 'Bicycle.php';
require 'SkateBoard.php';

$voiture = new Car('red',4,'fuel');
$velo = new Bicycle('red',1);
$skate = new SkateBoard('white',0);
var_dump($voiture->switchOn());
$velo->setCurrentSpeed(9);
var_dump($velo->switchOn());
$velo->setCurrentSpeed(11);
var_dump($velo->switchOn());

