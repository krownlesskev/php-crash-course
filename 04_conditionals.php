<?php
// Operators are similair to Js Operators


// If statements handle like Js

$age = 17;

// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo 'Sorry you are not old enough to vote';
// };

$t = date("H");

// if ($t < 12) {
//     echo 'Good Morning';
// } elseif ($t < 17) {
//     echo 'Good afternoon';
// } else {
//     echo 'Good Evening';
// }

$posts = ['first post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

// Ternary Operator is handled like Js
// echo !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// ?? is a coalescing operator
$firstPost = $posts[0] ?? null;

// echo $firstPost;

$favColor = 'green';

switch ($favColor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'You have a differen favorite color';
        break;
}
