<?php 

class Car {
	public $brand = 'Toyota';
	public $type = 'Fortuner';

	public function start()
	{
		return "Startin engine...\n";
	}
}

$car1 = new Car(); //instantiation
echo "$car1->brand \n";
echo "$car1->type \n";
// Run the method
echo $car1->start();

echo "\n";

$car2 = new Car(); //instantiation
// Set new value
$car2->brand = 'Mitsubishi';
$car2->type = 'Expander';


echo "$car2->brand \n";
echo "$car2->type \n";

// Run the method
echo $car2->start();