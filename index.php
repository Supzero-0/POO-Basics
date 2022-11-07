<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$volvo = new Truck(250, 'red', 2, 'fuel');
$man = new Truck(200, 'blue', 2, 'electric');

echo $man->forward();
echo $man->brake();
echo '<br>';
echo $man->full();

echo '<br>';

$man->setLoading(100);
echo $man->full();

echo '<br>';

var_dump($man);
