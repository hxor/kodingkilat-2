<?php 

class Car {
    public $brand = 'BMW';

    public function showBrand()
    {
        // Accessing $brand property using $this keyword
        $brand = $this->brand;
        return $this->lowerCase($brand);
    }
    
    public function lowerCase($merk, $brand = 'Toyota')
    {
        $brand = $merk;
        return strtolower($brand);
    }
}

$car = new Car();
echo $car->showBrand();