<?php 

class Car {
    public $brand = 'BMW'; //property

    public function showBrand()
    {
        // Accessing $brand property using $this keyword
        return $this->brand;
    }
}

$car = new Car();
echo $car->showBrand();