<?php 

//Parent class
class Car {
   final public function engine()
   {
       return 'Gasoline';
   }

}

// child class
class ElectricCar extends Car {

   public function engine()
   {
       return 'Electrical';
   }
}

// Instance SportCar Object
$ferrari = new ElectricCar();
echo $ferrari->engine();