<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private int $capacity;
    private int $loading = 0;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        $this->capacity = $capacity;
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function full(): string
    {
        if ($this->loading === 100) {
            return "Full !";
        }
        return "In filling !";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    /**
     * Get the value of capacity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Get the value of loading
     */
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * Set the value of loading
     *
     * @return  self
     */
    public function setLoading(int $loading)
    {
        $this->loading = $loading;

        return $this;
    }
}
