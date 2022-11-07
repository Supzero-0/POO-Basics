<?php

class Bicycle
{
    private int $nbWheels;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private bool $hasLuggageRack;

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function forward(): string
    {
        $this->setCurrentSpeed(15);
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

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function __construct(string $color = 'blue')
    {
        $this->color = $color;
    }
}
