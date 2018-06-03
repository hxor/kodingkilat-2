<?php 

class Car {
	public $brand = 'Toyota';
	public $type = 'Fortuner';
	public $year = '2017';
	public $color = 'Black';

	public function start()
	{
		return "Startin engine...\n";
	}
}

$car = new Car(); //instantiation
// Set new value
$car->brand = 'Mitsubishi';
$car->type = 'Expander';
$car->year = '2018';
$car->color = 'White';


echo "$car->brand \n";
echo "$car->type \n";
echo "$car->year \n";
echo "$car->color \n";

// Run the method
echo $car->start();