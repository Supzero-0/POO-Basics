<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->setCurrentSpeed(30);
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

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * Get the value of nbWheels
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * Get the value of currentSpeed
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of nbSeats
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of energy
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Get the value of energyLevel
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}
