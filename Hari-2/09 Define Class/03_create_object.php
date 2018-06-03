<!-- Define object before using class  -->
<?php 

class Car {
	public $brand;
	public $type;
	public $year;
	public $color = 'Blue';
}

$car = new Car(); //instantiation
echo "<pre>";
var_dump($car);
echo "</pre>";