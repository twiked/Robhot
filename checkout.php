<?php
require_once 'db.php';
require_once 'cart.php';

if($_SERVER['REQUEST_METHOD'] == 'GET' && count($_SESSION['cart']) > 0) {
	$inQuery = implode(',', array_fill(0, count($_SESSION['cart']), '?'));
	$stmt = $db->prepare("SELECT * FROM productlist WHERE id IN (" . $inQuery . ')');
	foreach ($_SESSION['cart'] as $id => $value) {
		$stmt->bindValue(($k+1), $id);
	}
	$stmt->setFetchMode(PDO::FETCH_OBJ);
	$stmt->execute();
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach ($_SESSION['cart'] as $id => $count) {
		$stmt = $db->prepare("UPDATE productlist SET number = number - ? WHERE id = ?");
		$stmt->bindValue(1, $count);
        $stmt->bindValue(1, $id);
		$stmt->execute();
		// Check here if checkout was successful (missing items ?)
	}
	$_SESSION['cart'] = array();
	echo "You'll receive your items in TWO WEEKS. Have a nice day ! <a href='./products.php'>Return to products</a>";
	die;
}

$currentpage = "products";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aperture Science - Checkout </title>
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
        width: 200px;
    }
    </style>
</head>

<body>
    <div id="wrap">

        <?php include "header.php" ?>

        <div id="header" class="well pull-right">
            <b id="artCount"><?php echo count($_SESSION['cart'])?></b> articles
            <form method="post" action="./checkout.php">
            	<input type="submit" value="Pay" class="btn btn-lg btn-success">
            </form>
            <button id="emptyCart" type="button" class="btn btn-lg btn-danger">Empty cart</button>
        </div>
        <div class="container">
        	<h1 class="center">Cart</h1>
            <?php
            if (isset($stmt))
            	while($row = $stmt->fetch()) { ?> 
            <div class="well product row">
                <div class="col-md-4">
                    <img alt="Product image" class="center" src="data:image/png;base64,<?php echo $row->imgbase64 ?>" width=200 height=200>
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
                    <button data-art="<?php echo $row->id ?>" type="button" class="buy btn btn-lg btn-primary">Buy</button>
                    <br>
                    <span><?php echo $_SESSION['cart'][$row->id] ?></span>
                </div>
            </div> 
            <?php } ?>
        </div>
        <div id="push"></div>
    </div>

    <?php include "footer.php" ?>

    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.buy').click(function(){
            $.get('./cart.php', { 'addToCart' : $(this).attr("data-art") }, 
                function( data ) {
                    $('#artCount').text(data);
                }
            )
        });

        $('#emptyCart').click(function(){
            $.get('./cart.php', { 'emptyCart' : 1 }, 
                function( ) {
                    location.reload();
                }
            )
        });
    });
    </script>
</body>
</html>