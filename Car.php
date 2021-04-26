<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car extends Vehicle implements LightableInterface
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->setEnergy($energy);
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        if(in_array($energy,self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setParkBrake():void
    {
        echo 'OK je touche au frein à main' . PHP_EOL;
        $this->hasParkBrake = !$this->hasParkBrake;
    }
    public function start():void
    {
        if ($this->hasParkBrake){
            throw new Exception("Frein à main enclanché");
        }
        echo "Here We Go" . PHP_EOL;
    }
    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff(): bool
    {
        return false;
    }
}