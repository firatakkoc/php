<?php

class Car {
  private $color = 'red';
  private $weight = 2000;

  static private $availableColors = [
    'red',
    'green',
    'black',
    'pink'
  ];

  public static function getAvailableColors() {
    return self::$availableColors;
  }

}





Car::getAvailableColors();
