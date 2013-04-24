<?php

/*
 * 200.php
 * Used to throw a 200 success response from the server.
 */

header('HTTP/1.1 200 OK');
echo 'This request has completed successfully.';
die();

/*
 * EOF
 */

?>