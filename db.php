<?php

$db_login = 'CHANGEME';
$db_password = 'CHANGEME';

try {
	$db = new PDO('mysql:host=localhost;dbname=web', $db_login, $db_password);
} catch (Exception $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>
