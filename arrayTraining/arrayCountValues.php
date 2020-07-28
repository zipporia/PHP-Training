<?php
// PHP Array Functions - array_count_values() Function

// This function counts all the values of an given array.

// syntax - array_count_values(array)

//$color = array("red", "green", "black", "blue", "red", "black");

$color = array(
    'c1' => "red",
    'c2' => "green",
    'c3' => "black",
    'c4' => "blue",
    'c5' => "red",
    'c6' => "black",
    'c7' => "blue"
);


$countArrayItem = array_count_values($color);

echo '<pre>';
print_r($countArrayItem);
echo '</pre>';
