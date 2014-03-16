<?php

$db_host = 'localhost';
$db_name = 'web';
$db_login = 'web';
$db_password = 'web';

try {
	$db = new PDO(sprintf('mysql:host=%s;dbname=%s', $db_host, $db_name), $db_login, $db_password);
} catch (Exception $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>
