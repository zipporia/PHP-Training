<?php

// PHP Array Functions - array_chunk() Function

// This function divide an array into different block of new arrays.

// Syntax - array_chunk(array,size,preserve_key);

$color = array("red", "green", "blue", "white", "black");

$chunk_array = array_chunk($color, 2, true);

foreach($chunk_array as $row){
    foreach($row as $sub_row){
        echo $sub_row."<br>";
    }
}
echo"<br><br>";
/*
echo '<pre>';
print_r($chunk_array);
echo '</pre>';
*/

$color2 = array(
    'blue' => "#0000ff",
    'red' => "#FF0000",
    'green' => "#008000",
    'white' => "#ffffff",
    'black' => "#000000"
);

$chunk_array2 = array_chunk($color2, 2, true);

foreach($chunk_array2 as $row){
    foreach($row as $sub_keys => $sub_rows){
        echo $sub_keys." = ".$sub_rows."<br>";
    }
}

/*
echo '<pre>';
print_r($chunk_array2);
echo '</pre>';
*/