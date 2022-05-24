<?php

// Simple Array
$numbers = [1, 2, 3, 4];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[1];

// Associative Array, can define your own index numbers/names
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green',
];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '00f'
];

$person = [
    'first_name' => 'Kevin',
    'last_name' => 'Sana',
    'email' => 'kevinsana123@gmail.com'
];

// echo $person['first_name'];

// multi-dimensional arrays

$people = [
    [
        'first_name' => 'Kevin',
        'last_name' => 'Sana',
        'email' => 'kevinsana123@gmail.com'
    ],
    [
        'first_name' => 'Michelle',
        'last_name' => 'Lejano',
        'email' => 'michellelejano@gmail.com'
    ],
    [
        'first_name' => 'Ivan',
        'last_name' => 'Sana',
        'email' => 'IvanSana@gmail.com'
    ]
];

// echo $people[0]['email'];
var_dump(json_encode($people));
