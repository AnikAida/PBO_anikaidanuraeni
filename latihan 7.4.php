<?php
class Base{
    function display(){
        echo"\nBase class function declared final!";
    }
    function demo(){
        echo"\nBase class funtion!";
    }
}
class Derived extends Base{
    function demo(){
        echo"\ndDerived class function!";
    }
}
$ob=new Base;
$ob->demo();
$ob->display();
$ob2=new Derived;
$ob2->demo();
$ob2->display();
?>