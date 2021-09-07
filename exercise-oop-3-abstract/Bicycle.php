<?php

require_once 'Vehicle.php';
class Bicycle extends Vehicle
{
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    // abstract methods
    public function changeWheel() {
        echo 'RTFM' . "\n";
    }
}
?>