<?php

/* 
To use global variables in the scope of a function, 
you must use the global key word before calling the variable
*/
function registerUser($email)
{
    echo $email . ' registered';
}

// registerUser('kevinsana@gmail.com');

function sum($n1 = 5, $n2 = 5)
{
    return $n1 + $n2;
}

$newNum = sum();

// echo $newNum;

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};


// echo $subtract(10, 5);

// Can use arrow functions
$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(3, 3);
