<?php
// Different Types of Arrays
// 1. Indexed Arrays
// 2. Associative Arrays
// 3. Multidimensinal Arrays 


// Index Array syntax...
// array(value1, value2, value3, ...);
echo "// Index Array"."<br>";
$colors = array("red", "green", "blue");
echo "For Loop"."<br>";
for($i=0; $i < count($colors); $i++){
    echo $colors[$i]."<br>";
}
echo"<br><br>";
echo "Foreach"."<br>";
foreach($colors as $color){
    echo $color."<br>";
}
echo"<br><br>";
// <========================>

// Associative Array syntax
// array(key1 => value1, key2 => value2, key3 => value3, ...);
echo "// Associative Array"."<br>";
$color = array('1' => "red", '2' => "green", '3' => "blue");

foreach($color as $keys => $values){
    echo $keys . " " . $values . "<br>";
}
echo "<br><br>";
// <========================>

// Multidimensional Array
echo "// Multidimensional Array"."<br>";
$color = array(
    'red' => array("Red item1", "Red Item2", "Red Item2"),
    'green' => array("Green1", "Geen2", "green3"),
    'blue' => array("Blue1", "blue2", "blue3")
);

foreach($color as $keys => $values){
    echo $keys." = ";
    foreach($values as $sub_row){
        echo " ".$sub_row.", ";
    }echo"<br><br>";
}