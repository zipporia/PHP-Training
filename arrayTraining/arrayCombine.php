<?php

// PHP Array Function - array_combine() Function

// this function returns an associative array from two arrays, it will get keys from array1 vavlues from array2.

// Syntax - array_combine(keys, values);
// two Array Index combined => Associative Array
$array1 = array("red", "black", "white");
$array2 = array("#ff0000", "#000000", "#ffffff");

$arr = array_combine($array1, $array2);

echo '<pre>';
print_r($arr);
echo '</pre>';

echo "<br><br>";
// two Associative Array combined => new Associative array
$color = array(
    'cl' => "red",
    'c2' => "black",
    'c3' => "white"
);

$hash_code = array(
    'h1' => "#ff0000",
    'h2' => "#000000",
    'h3' => "#ffffff"
);

$array = array_combine($color, $hash_code);
echo '<pre>';
print_r($array);
echo '</pre>';