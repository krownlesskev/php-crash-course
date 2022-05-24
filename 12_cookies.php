<?php

/*
Cookies store data in the remote browser and tracks or identifies return users.
You can set specific data to be stored in the browser then retrieve it when the user visits
the site again.
*/

// Set cookie
setcookie('name', 'Kevin', time() + 86400 * 30);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400 * 30);
