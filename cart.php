<?php
session_start();

if (array_key_exists ("emptyCart", $_GET) || !isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

if (array_key_exists ("id", $_GET) && array_key_exists ("count", $_GET)) {
	if((int) $_GET["count"] == 0) {
		unset($_SESSION['cart'][(int) $_GET["id"]]);
	} else {
		$_SESSION['cart'][(int) $_GET["id"]] = (int) $_GET["count"];
	}
	echo count($_SESSION['cart']);
}

?>