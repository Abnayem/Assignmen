<?php
class Animal {
  public $name;

  public function __construct($name) {
      $this->name = $name;
  }
  public function makeSound() {
    return "Some generic animal sound";
    }
  
}

class Dog extends Animal {
  public function makeSound() {
      return "Woof! Woof!";
  }
}

class Cat extends Animal {
  public function makeSound() {
      return "Meow! Meow!";
  }
}

class Cow extends Animal {
  public function makeSound() {
      return "Moo! Moo!";
  }
}


$dog = new Dog("dog");
$cat = new Cat("cat");
$cow = new Cow("cow");



echo $dog->name . " say's :" . $dog->makeSound() . "<br>";
echo $cat->name . ": say's  " . $cat->makeSound() . "<br>";
echo $cow->name . ":  say's " . $cow->makeSound();



?>