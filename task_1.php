<?php

class Geometricshapes {
    public function areacalculation() {
      
    }
}

class Circle extends Geometricshapes {
    private $radius;

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function areacalculation() {

    $pi = 3.14159;
    return  $pi * $this->radius ** 2;
    
    }
}

class Rectangle extends Geometricshapes {
    private $width;
    private $height;

    public function setRectanglearia($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function areacalculation() {
        return $this->width * $this->height;
    }
}


$circle = new Circle();
$circle->setRadius(5);
$circleArea = $circle->areacalculation();

$rectangle = new Rectangle();
$rectangle->setRectanglearia(4, 6);
$rectangleArea = $rectangle->areacalculation();

echo "Circle area: " . $circleArea . " Mitter <br>";
echo "Rectangle area: " . $rectangleArea . " Mitter";

?>
