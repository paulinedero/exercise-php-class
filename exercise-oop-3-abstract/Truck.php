<?php

require_once 'Car.php';
class Truck extends Car 
{
    // properties
    public int $loadCapacity; //m3
    public int $currentLoad = 0; //%

    // constructor
    public function __construct(string $color, int $nbSeats, string $energy, int $loadCapacity, int $currentLoad)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->loadCapacity = $loadCapacity;
        $this->currentLoad = $currentLoad;
    }

    //abstract methods
    public function changeWheel() {
        echo 'RTFM' . "\n";
    }

    // methods
    public function checkCurrentLoad(): string {
        if ($this->currentLoad < 100) {
            return 'in filling';
        } else {
            return 'full';
        }
    }

    //getters and setters
    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function setLoadCapacity(int $loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }
    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = $currentLoad;
    }

}
?>