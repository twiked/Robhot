<?php
require_once 'db.php';
$stmt = $db->prepare("SELECT * FROM productlist");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
    <title>RobotWithMe - Product </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="./css/sticky_footer.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    .product {
        margin-top: 30px;
    }

    .center {
        text-align: center;
    }

    #header {
        width: 30px;
        position: absolute;
        right: 0px;
        margin: 5px;
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
                        <li class="active"><a href="./products.php">Products</a></li>
                        <li><a href="./register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="header">
            
        </div>
        <div class="container">
            <?php 
            while($row = $stmt->fetch()) { ?> 
            <div class="well product row">
                <div class="col-md-4">
                    <img class="center" src="data:image/png;base64,<?php echo $row->imgbase64 ?>" width=200 height=200>
                </div>
                <div class="col-md-4">
                    <h1><?php echo $row->title ?></h1>
                    <p><?php echo $row->description ?></p>
                </div>
                <div class="col-md-4 center">
                    <h1><?php echo $row->price ?> BTC</h1>
                    <br>
                    <?php echo $row->number ?> disponibles
                    <br>
                    <a href="#<?php echo $row->id ?>"> Buy</a>
                </div>
            </div> 
            <?php } ?>
        </div>
        <div id="push"></div>
    </div>

    <div id="footer">
        <div class="container">
            <p class="credit">Copyright 2014 Mathieu Degaine & <a href="http://me.linuxw.info">Éric Gillet</a>.<a id="credits" href="./credits.php">Credits</a></p>
        </div>
    </div>

    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>
</html>