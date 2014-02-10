<?php
session_start();

if ($_GET["emptyCart"] != NULL || !isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

if($_GET["addToCart"] != NULL) {
	$_SESSION['cart'][]= (int) $_GET["addToCart"];
	echo count($_SESSION['cart']);
}

?>