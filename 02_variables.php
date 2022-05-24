<?php

// Variable Rules
/*
- Variables must be prefixed with $
- Must start with a letter or the underscore character
- Cannot start with a number
- can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Kevin'; // String
$age = 30; // Int
$hasKids = true; // Bool
$cash_on_hand = 202205.23; // Float

// var_dump($cash_on_hand);

// Concatination is done with "."
// echo $name . ' is ' . $age . ' years old.';

// String interpolation is done with double-quotes (").
// echo "${name} is ${age} years old.";

// Arithmitic is handled like JS

// define() is used to create constants.
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

