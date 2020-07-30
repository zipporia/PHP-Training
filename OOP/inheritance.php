<?php

Class Fruit{
    protected $name;
    public $color;
    private $size;

    public function __construct($name, $color, $size){
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }

    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color} and the size is {$this->size}.";
    }
}

Class Strawberry extends Fruit{
    public function message(){
        echo "this is {$this->name} class";
        echo "<br>";
        echo "the color is {$this->color}";
        echo "<br>";

       $this->intro();
    }   
}

$strawberry = new Strawberry("Strawberry", "red", 10);
$strawberry->message();
