<?php

$db_login = 'web';
$db_password = 'web';

try {
	$db = new PDO('mysql:host=localhost;dbname=web', $db_login, $db_password);
} catch (Exception $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>
