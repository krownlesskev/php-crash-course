<?php

$fruits = ['apple', 'orange', 'pear'];


// Get length of an array
// echo count($fruits);


// Search array
// var_dump(in_array('apple', $fruits));

// Add to an array as the last item
$fruits[] = 'grape';
array_push($fruits, 'blueberry');

// Add to an array as the first item
array_unshift($fruits, 'mango');

// Removes last item from array
array_pop($fruits);

// Remove first item of array
array_shift($fruits);

// Remove a specific element from array (also removes the index number)
// unset($fruits[2]);

// Split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

// print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

// flips the keys and values with each other
$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20);
// print_r($numbers);

$newNumbers = array_map(function ($number) {
    return "Number ${number}";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn ($number) => $number <= 10);
// print_r($lessThan10);

$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);

var_dump($sum);
