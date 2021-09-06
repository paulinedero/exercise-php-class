<?php

require_once 'Vehicle.php';
abstract class Bicycle extends Vehicle
{
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    // abstract methods
    abstract public function changeWheel();
}
?>