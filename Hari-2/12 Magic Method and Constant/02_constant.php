<?php 

class Car {
    public $brand = '';

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return 'This ' . strtolower(__CLASS__) . ' brand is ' . $this->brand;
    }
}

$car = new Car('Ferrari');
echo $car->getBrand();