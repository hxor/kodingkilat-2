<?php 

//Parent class
class Car {
    public $brand = 'Toyota';
    // protected $brand;

    public function greeting()
    {
        return ' Hi, this ' . $this->brand . ' is my new car';
    }

}

// child class
class SportCar extends Car {

    public $brand = 'Ferrari';
    // protected $brand;

    public function greeting()
    {
        return ' Hi, this ' . $this->brand . ' is my new car';
    }
}

// Instance SportCar Object
$ferrari = new SportCar();
echo $ferrari->brand;
echo $ferrari->greeting();