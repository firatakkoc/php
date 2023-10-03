<?php

class Car {
  public $color;
  public $manufacturer;

  const MY_CONSTANT = [];

  public function __construct($color, $manufacturer) 
  {
    $this->color = $color;
    $this->manufacturer = $manufacturer;
  }

}

$xc60 = new Car('black', 'Volvo');

var_dump($xc60);
