<?php

// accessing the constant from outside the class

class Myclass {
  const MESSAGE = "Keep Grinding Mark!!";
}

echo Myclass::MESSAGE;

// accessing the constant from inside the class

class Myclass1 {
    const MESSAGE = "My class 1.. Keep Grinding Mark!!";

    public function message(){
        echo self::MESSAGE;
    }
  }
  
$Myclass1 = new Myclass1();
$Myclass1->message();

