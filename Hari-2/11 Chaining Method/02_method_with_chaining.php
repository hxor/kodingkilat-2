<?php

class Car {
    public $tank = 0;

    public function fillFuel($liter)
    {
        $this->tank += $liter;
        return $this;
    }

    public function drive($distance)
    {
        $exhausted = $distance / 20;
        $this->tank -= $exhausted;
        return $this;
    }
}

$car = new Car();
$leftGas = $car
            ->fillFuel(2)
            ->drive(20)
            ->tank;

echo "Gasonline Leftover = {$leftGas} liter";