<?php

/*
    Exceptions can be thrown and caught (.catch in JS) within PHP.
    Code may be surrounded in a try block to faciliate catching of exceptions.
    Each try must have at least one catch or finally block.
*/

function inverse($x)
{
    if (!$x) {
        throw new Exception('Division by zero');
    }
    return 1 / $x;
}


try {
    echo inverse(5);
    echo '<br>';
    echo inverse(0);
} catch (Exception $e) {
    echo 'Caught Exception: ', $e->getMessage(), ' ';
    echo '<br>';
} finally {
    echo 'First Finally';
    echo '<br>';
}


try {
    echo inverse(10);
    echo '<br>';
    echo inverse(0);
    echo '<br>';
} catch (Exception $e) {
    echo 'Caught Exception: ', $e->getMessage(), ' ';
    echo '<br>';
} finally {
    echo 'Second Finally';
    echo '<br>';
}
