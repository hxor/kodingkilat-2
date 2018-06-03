<?php 

class Car {
	public $brand;
	public $type;
	public $year;
	public $color = 'Blue';
}

$car = new Car(); //instantiation
echo "$car->brand \n";
echo "$car->type \n";
echo "$car->year \n";
echo "$car->color \n";