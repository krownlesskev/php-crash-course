<?php


// For loops are handled like Js, only difference is how variables are defined and called
// for ($i = 0; $i <= 10; $i++) {
//     echo "${i}" . '<br>';
// }


// While loop is handled like Js
// $x = 1;
// while ($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }

// $x = 1;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x <= 10);


// For Each is used for arrays

$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count($posts); $x++) {
//     echo "${posts[$x]} <br>";
// }

foreach ($posts as $index => $post) {
    echo $index + 1 . ' - ' . $post . "<br>";
}
