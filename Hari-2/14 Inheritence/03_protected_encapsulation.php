<?php 

//Parent class
class Car {
    private $brand;
    // protected $brand;

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

}

// child class
class SportCar extends Car {

    public function greeting()
    {
        return 'Hi, this ' . $this->brand . ' is my new car';
    }
}

// Instance SportCar Object
$ferrari = new SportCar();
$ferrari->setBrand('Ferrari');
echo $ferrari->greeting();