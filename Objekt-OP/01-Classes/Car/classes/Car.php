<?php 


class Car {
  private $color;
  private $model;
  private $price;

  private $availableColors =[
    'red', 
    'green',
    'blue',
    'white'
  ];

  public function getColor(){
    return $this->color;
  }

  public function setColor($color){
    
    if(in_array($color, $this->availableColors)){
      $this->color = $color;
    } else{echo 'Gibt es keine Farbe';}
  }

  public function getModel(){
    return $this->model;
  }

  public function setModel($model){
    $this->model = $model;
  }

  public function getPrice(){
    return $this->price;
  }

  public function setPrice($price){
    $this->price = $price;
  }
}

$xc60 = new Car();

$xc60->setColor('red');

echo "Color:".$xc60->getColor();


