<?php

class Car {
  private $color = 'red';
  private $weight = 2000;

  public function __construct($color, $weight) {
    $this->color = $color;
    $this->weight = $weight;
  }

  public function getColor() {
    return $this->color;
    
  }
  public function getWeight() {
    return $this->weight;
    
  }

  public function __destruct() {
    echo "Ich bin gestorben: ".$this->color.PHP_EOL;
  }
}

$myCar = new Car('black',1500);

echo $myCar->getColor().PHP_EOL;
echo $myCar->getWeight().PHP_EOL;
