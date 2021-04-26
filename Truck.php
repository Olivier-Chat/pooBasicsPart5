<?php

require 'Car.php';
class Truck extends Car
{
    protected  int $storageCapacity;
    protected int $shipping = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color,$nbSeats,$energy);
        $this->setStorageCapacity($storageCapacity);
    }
    public function controlFilling():string
    {
        return ($this->shipping < $this->storageCapacity)? "in filling":"full" ;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }


    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getShipping(): int
    {
        return $this->shipping;
    }
    public function setShipping($shipping):void
    {
        if ($shipping <= $this->storageCapacity){
            $this->shipping = $shipping;
        }
    }
}