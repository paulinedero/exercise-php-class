<?php
class SimpsonsCar
{
    //properties
    public /*int*/ $numberWheels;
    public /*int*/ $currentSpeed;
    private /*String*/ $color;
    private /*int*/ $numberSeats;
    private /*String*/ $energy;
    public /*int*/ $energyLevel;

    //constructor
    public function __construct(String $color, int $numberSeats, String $energy)
    {
        $this->color = $color;
        $this->numberSeats = $numberSeats;
        $this->energy = $energy;
    }

    //methods
    public function start(): String
    {
        $this->currentSpeed = 0;
        return "Start engine";
    }

    public function forward(): String
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): String
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    //getters
    public function getNumberWheels(): int
    {
        return $this->numberWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): String
    {
        return $this->color;
    }

    public function getNumberSeats(): int
    {
        return $this->numberSeats;
    }

    public function getEnergy(): String
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    //setters
    public function setColor(String $color): void
    {
        $this->color = $color;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
}
?>