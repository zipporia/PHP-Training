<?php
// PHP Classes/Objects OOP
class Fruit{
    private $name;
    private $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('This is apple!!');
$banana->set_name('This is banana');

echo $apple->get_name();
echo '<br>';
echo $banana->get_name();