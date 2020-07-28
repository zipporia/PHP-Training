<?php

// PHP Array Functions - array_column() Function

// array_column() return the all values of single column from the multi dimensional array.

// syntax - array_column(array, column_key, index_key);

$employee_data = array(
    array(
        'id' => 1001,
        'name' => 'Jesus H Duran',
        'gender' => 'Male',
        'city' => 'Los Angeles'
    ),
    array(
        'id' => 1002,
        'name' => 'Darryl B Dealba',
        'gender' => 'Male',
        'city' => 'Tampa'
    ),
    array(
        'id' => 1003,
        'name' => 'Louise R. Stone',
        'gender' => 'Female',
        'city' => 'Sanford'
    )
);

$name = array_column($employee_data, "name", "id");
echo '<pre>';
print_r($name);
echo '</pre>';