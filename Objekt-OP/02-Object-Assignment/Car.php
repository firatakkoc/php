<?php

class Car {
  public $color;
  public $weight;
  public $year;

}

$car = new Car();
$car2 = clone  $car;
$car->color = 'green';


var_dump($car2);