<?php
require_once 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$age = (int) $_POST['age'];
	$mail = $_POST['mail'];

	// Check attributes validity
	if(True) {
		$valid_data = True;
	}

	$stmt = $db->prepare("INSERT INTO registered_user(	firstname, lastname, age, email) VALUES (?, ?, ?, ?)");
	$stmt->bindValue(1, $name, PDO::PARAM_STR);
	$stmt->bindValue(2, $surname, PDO::PARAM_STR);
	$stmt->bindValue(3, $age, PDO::PARAM_INT	);
	$stmt->bindValue(4, $mail, PDO::PARAM_STR);
	$stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>RobotWithMe - Register </title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="./css/sticky_footer.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.block {
			margin-bottom: 8px;
		}

		.block label { 
			display: inline-block; width: 100px; text-align: right;
		}

		.green {
			color:green;
			font-weight:bold;
		}
	</style>
</head>
<body>
	<div id="wrap">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./about.php">RobotWithMe</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="./about.php">About us</a></li>
						<li><a href="./products.php">Products</a></li>
						<li class="active"><a href="./register.php">Register</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="well">
				<?php if($valid_data) echo "<div class=\"alert alert-success\"><strong>Successfully registered !</strong></div>";?>
				<form action="./register.php" method="post">
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

	<div id="footer">
	    <div class="container">
	    	<p class="credit">Copyright 2014 Mathieu Degaine & <a href="http://me.linuxw.info">Éric Gillet</a>.<a id="credits" href="./credits.php">Credits</a></p>
		</div>
	</div>

	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>
</html>