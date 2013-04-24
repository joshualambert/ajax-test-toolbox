<?php

/*
 * 500.php
 * Used to throw a 500 error response from the server.
 */

header("HTTP/1.0 500 Internal Server Error");
echo 'An error has occured.';
die();

/*
 * EOF
 */

?>