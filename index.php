<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', 1, "fuel");
var_dump($bike);

$bike->setColor('red');
$bike->setCurrentSpeed(8);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


$simpsonsCar = new SimpsonsCar('red', 5, 'gasoline');
var_dump($simpsonsCar);

$simpsonsCar->setColor('blue');
$simpsonsCar->setCurrentSpeed(30);
var_dump($simpsonsCar);

echo $simpsonsCar->forward();
echo '<br> Vitesse de la voiture : ' . $simpsonsCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $simpsonsCar->brake();
echo '<br> Vitesse de la voiture : ' . $simpsonsCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $simpsonsCar->brake();
?>
