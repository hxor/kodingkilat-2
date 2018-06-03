<?php 

//Parent class
class Car {
    private $brand;

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function greeting()
    {
        return 'Hi, this ' . $this->brand . ' is my new car';
    }
}

// child class
class SportCar extends Car {
    private $nos = 'Nitrous Oxide Systems';

    public function speedUp()
    {
        return 'Riding ' . $this->getBrand() . ' using ' . $this->nos;
    }
}

// Instance SportCar Object
$ferrari = new SportCar();
$ferrari->setBrand('Ferrari');
echo $ferrari->speedUp();