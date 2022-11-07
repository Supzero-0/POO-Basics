<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle();
// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();

$bmw = new Car('grey', 5, 'diesel');
$tesla = new Car('blue', 5, 'electric');

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);

// Moving bike
echo $bmw->forward();
echo '<br> Vitesse du vélo : ' . $bmw->getCurrentSpeed() . ' km/h' . '<br>';
echo $bmw->brake();
echo '<br> Vitesse du vélo : ' . $bmw->getCurrentSpeed() . ' km/h' . '<br>';
echo $bmw->brake();

var_dump($bmw);
