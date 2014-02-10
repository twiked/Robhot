<?php
session_start();

if (array_key_exists ("emptyCart", $_GET) || !isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
	error_log("emptied cart");
}

if (array_key_exists ("addToCart", $_GET)) {
	error_log("added " . $_GET["addToCart"]);
	$_SESSION['cart'][] = (int) $_GET["addToCart"];
	echo count($_SESSION['cart']);
}

?>