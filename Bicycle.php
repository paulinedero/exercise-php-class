<?php
var_dump("texdry");
class Bicycle
{
    //properties
    private String $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    //constructor
    public function __construct(String $color, int $currentSpeed, int $nbSeats, int $nbWheels)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }

    //methods
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
    public function getColor(): String
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
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