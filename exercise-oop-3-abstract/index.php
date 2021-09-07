<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';

// POO - Basics | Part 3 : Abstraction

$bike = new Bicycle('blue', 1, 'electric');
echo $bike->forward();
var_dump($bike);

$car = new Car('blue', 1, 'gasoline');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('red', 3, 'fuel', 13, 50);
var_dump($truck);
var_dump(Truck::ALLOWED_ENERGIES);
echo $truck->forward();
echo '<br>';
echo $truck->brake();
echo '<br>';
echo 'Load Capacity : ' . $truck->getLoadCapacity() . ' m3';
echo '<br>';
echo 'Current Load : ' . $truck->getCurrentLoad() . ' %';
$truck->setColor('blue');
var_dump($truck);
echo $truck->changeWheel();

// $vehicle = new Vehicle('purple', 4);
// var_dump($vehicle);


/*
POO - Basics | Part 2 : Héritage et parentalité

$bike = new Bicycle('blue', 1, 'electric');
echo $bike->forward();
var_dump($bike);

$car = new Car('blue', 1, 'gasoline');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('red', 3, 'fuel', 13, 50);
var_dump($truck);
var_dump(Truck::ALLOWED_ENERGIES);
echo $truck->forward();
echo '<br>';
echo $truck->brake();
echo '<br>';
echo 'Load Capacity : ' . $truck->getLoadCapacity() . ' m3';
echo '<br>';
echo 'Current Load : ' . $truck->getCurrentLoad() . ' %';
$truck->setColor('blue');
var_dump($truck);


POO - Basics | Part 1: Faire ses premières classes

$bike = new Bicycle('blue', 1, 2, 3);
var_dump($bike);

$bike->setColor('red');
$bike->setCurrentSpeed(8);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
/*
$car = new car('red', 5, 'gasoline');
var_dump($car);

$car->setColor('blue');
$car->setCurrentSpeed(30);
var_dump($car);

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
*/

