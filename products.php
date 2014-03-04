<?php
require_once 'db.php';
require_once 'cart.php';
$stmt = $db->prepare("SELECT id, imgbase64, title, description, price, number FROM productlist");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();

$currentpage = "products";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aperture Science - Product </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./css/sticky_footer.css">
    <link rel="stylesheet" type="text/css" href="./css/theme.css">

    <link rel="icon" type="image/png" href="./img/icon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <?php include "header.php" ?>
    <div id="wrap">
        <div id="header" class="well pull-right">
            <b id="artCount"><?php echo count($_SESSION['cart'])?></b> articles
            <a href="./checkout.php"><span class="btn btn-lg btn-success">Checkout</span></a>
            <button id="emptyCart" type="button" class="btn btn-lg btn-danger">Empty cart</button>
        </div>
        <div class="container content">
            <?php 
            while($row = $stmt->fetch()) { ?> 
            <div class="well product row">
                <div class="col-md-4">
                    <img alt="Product image" class="center rotate" src="data:image/png;base64,<?php echo $row->imgbase64 ?>">
                </div>
                <div class="col-md-4">
                    <h1><?php echo $row->title ?></h1>
                    <p><?php echo $row->description ?></p>
                </div>
                <div class="col-md-4 center">
                    <h1><?php echo $row->price ?> BTC</h1>
                    <br>
                    <?php echo $row->number ?> available
                    <br>
                    <button data-art="<?php echo $row->id ?>" type="button" class="rotate buy btn btn-lg btn-primary">Buy</button>
                    <br>
                    <input type='number' min='0' name='qty' 
                    value='<?php if(isset($_SESSION['cart'][$row->id])) echo $_SESSION['cart'][$row->id]; else echo 0 ?>'
                    id='qty-<?php echo $row->id ?>'> 
                </div>
            </div> 
            <?php } ?>
        </div>
        <div id="push"></div>
    </div>

    <?php include "footer.php" ?>

    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./js/cart.js"></script>
</body>
</html>
