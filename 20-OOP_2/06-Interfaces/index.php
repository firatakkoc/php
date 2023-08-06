<?php 


interface Person {
  public function getAge() : int;
}

class Student implements Person{
  public function getAge(): int {
    return 21;
  }
}

class Teacher implements Person {
  public function getAge(): int {
    return 40;
  }
}

class Staff implements Person {
  public function getAge(): int {
    return 30;
  }
}

function printAge(Person $person) {
  echo 'Diese Person ist '. $person->getAge(). ' Jahre alt.';
}


$s = new Student();
printAge($s);
echo '<br>';

$t = new Teacher();
printAge($t);
echo '<br>';
$st = new Staff();
printAge($st);
echo '<br>';
var_dump($s instanceof Person);


?>