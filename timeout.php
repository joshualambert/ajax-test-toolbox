<?php

/*
 * timeout.php
 * Used to test a server timeout.
 * WARNING: This script will loop in infinity until it is killed by the server. This is not recommended for use in a production environment.
 */

$me = 'hello';
while ($me == 'hello') {
	null; // Do nothing. :) This is to cause a server timeout.
}

/*
 * EOF
 */

?>