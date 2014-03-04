<?php
require_once 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$age = (int) $_POST['age'];
	$mail = $_POST['mail'];

	$stmt = $db->prepare("INSERT INTO registered_user(firstname, lastname, age, email) VALUES (?, ?, ?, ?)");
	$stmt->bindValue(1, $name, PDO::PARAM_STR);
	$stmt->bindValue(2, $surname, PDO::PARAM_STR);
	$stmt->bindValue(3, $age, PDO::PARAM_INT	);
	$stmt->bindValue(4, $mail, PDO::PARAM_STR);
	$valid_data = $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
	$valid_data = False;
}

$currentpage = "register";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aperture Science - Register </title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">

	<link rel="stylesheet" type="text/css" href="./css/theme.css">
	<link rel="stylesheet" type="text/css" href="./css/sticky_footer.css">

	<link rel="icon" type="image/png" href="./img/icon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include "header.php" ?>
	<div id="wrap">
		<div class="container content">
			<div class="alert-success" <?php if(!$valid_data) {echo "style=\"display: none;\""; } ?>><strong>Successfully registered !</strong></div>
			<div id="error" class="alert-success" style="display: none;"><span></span></div>
			<div class="well">
				<form id="register" action="./register.php" method="post">
					<div class="block"><label>First Name:</label> 	<input type="text" name="name" required autofocus></div>
					<div class="block"><label>Last Name:</label>	<input type="text" name="surname" required></div>
					<div class="block"><label>Age:</label>			<input type="number" name="age" min="13" max="120" required></div>
					<div class="block"><label>Email:</label>		<input type="email" name="mail" required></div>
					<input type="submit" value="S'enregistrer">
				</form>
			</div>
		</div>
		<div id="push"></div>

    </div>
    <?php require "footer.php" ?>


	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="./js/additional-methods.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		    $("#register").validate({
		    	rules: {
		    		name: {
		    			lettersonly: true
		    		},
		    		surname: {
		    			lettersonly: true
		    		}
		    	}
		    });
		});
	</script>
</body>
</html>
