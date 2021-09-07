<?php

abstract class HighWay
{
    //properties
    protected array $currentVehicles;
    protected int $nbLanes;
    protected int $maxSpeed;

    // constructor
    public function __construct(int $nbLanes, int $maxSpeed){
        {
            $this->nbLanes = $nbLanes;
            $this->maxSpeed = $maxSpeed;
        }
    }

    //getters and setters
    public function getCurrentVehicles (): array {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles (array $currentVehicles): array {
        return $this->currentVehicles = $currentVehicles;
    }

    public function getNbLanes (): int {
        return $this->nbLanes;
    }

    public function setNbLanes (int $nbLanes): int {
        return $this->nbLanes = $nbLanes;
    }

    public function getMaxSpeed (): int {
        return $this->maxSpeed;
    }

    public function setMaxSpeed (int $maxSpeed): int {
        return $this->maxSpeed = $maxSpeed;
    }

    //abstract methods
    abstract public function addVehicle($vehicle);
}
?>