<?php
class fruit{
    public $name;
    public $color;
    public function _constract ($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The Fruit is {$this->name} and the color is {$this->color}.";

    }
}

//Strawberry is inherited from fruit
class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry?";

    }
}
$strawberry = new Strawberry("Strawberry", "Red");
$strawberry-> message();
$strawberry->intro();
?>
