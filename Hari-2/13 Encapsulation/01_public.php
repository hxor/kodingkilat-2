<?php 

class Car {
    public $brand;

    public function getBrand()
    {
        return $this->brand;
    }
}

$car = new Car();
$car->brand = 'Toyota';
echo 'This car brand is ' . $car->getBrand();