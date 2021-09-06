<?php
require_once 'Vehicle.php';
abstract class Car extends Vehicle
{
    // constant
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //properties
    protected string $energy;

    protected int $energyLevel;

    //constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    //abstract methods
    abstract public function changeWheel();

    //getters and setters
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}