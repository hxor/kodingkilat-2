<?php

class Car {
    public $tank = 0;

    public function fillFuel($liter)
    {
        $this->tank += $liter;
    }

    public function drive($distance)
    {
        $exhausted = $distance / 20;
        $this->tank -= $exhausted;
    }
}

$car = new Car();
$car->fillFuel(2);
$car->drive(20);
$leftGas = $car->tank;

echo "Gasonline Leftover = {$leftGas} liter";