<?php
class SimpsonsCar
{
    //properties
    public /*int*/ $numberWheels;
    public /*int*/ $currentSpeed;
    private /*string*/ $color;
    private /*int*/ $numberSeats;
    private /*string*/ $energy;
    public /*int*/ $energyLevel;

    //constructor
    public function __construct(string $color, int $numberSeats, string $energy)
    {
        $this->color = $color;
        $this->numberSeats = $numberSeats;
        $this->energy = $energy;
    }

    //methods
    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Start engine";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
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

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNumberSeats(): int
    {
        return $this->numberSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    //setters
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
}
?>