<?php 

class Car {
    private $brand;

    public function getBrand()
    {
        return $this->brand;
    }
}

$car = new Car();
$car->brand = 'Toyota';
echo 'This car brand is ' . $car->getBrand();