<?php
// parent class
abstract class cCar {
    public $name;
    public function _construct($name){
        $this->name = $name;
    }
    abstract public function intro();
}
// chid classes
class Audi extends Car{
    public function intro(){
        return "Chose German quality! i'm an $this->name!";

    }
}
class Volvo Citroen extends Car{
    public function intro(){
        return "French extravagance! i'm $this->name!";
    }
}
?>