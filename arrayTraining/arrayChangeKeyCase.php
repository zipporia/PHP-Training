<?php

//PHP Array Functions - array_change_key_case() Function

/* 
This function return the array with changes of all keys
to upper case or lower case and if the array is not array
then at that time it return false.
*/

// Syntax - array_change_key_case(array, case(optional));
// CASE_UPPER - Changes the keys to uppercase
// CASE_LOWER - Changes the keys to lowercase

$employee_data = array(
    'John' => 25,
    'Alex' => 30,
    'Cornelio' => 33
);

echo '<pre>';
print_r(array_change_key_case($employee_data, CASE_UPPER));
echo '</pre>';