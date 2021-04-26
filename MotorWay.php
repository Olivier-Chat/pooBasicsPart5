<?php


final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed=130;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Truck || $vehicle instanceof Car){
            $this->currentVehicles[] = $vehicle;
        }
    }
}