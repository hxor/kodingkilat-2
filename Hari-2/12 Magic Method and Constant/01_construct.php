<?php 

class Car {
    public $brand = '';
    public $year = '';

    public function __construct($brand, $year)
    {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function getBrand()
    {
        return 'This car brand is ' 
        . $this->brand . ' year ' . $this->year;
    }
}

$car = new Car('Toyota', 1980);
echo $car->getBrand();