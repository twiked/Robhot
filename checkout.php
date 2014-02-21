<?php
require_once 'db.php';
require_once 'cart.php';

if($_SERVER['REQUEST_METHOD'] == 'GET' && count($_SESSION['cart']) > 0) {
    // Cart display

    // Get the unique products from the cart
	$inQuery = implode(',', array_fill(0, count($_SESSION['cart']), '?'));
	$stmt = $db->prepare("SELECT * FROM productlist WHERE id IN (" . $inQuery . ')');
    $i = 1;
	foreach ($_SESSION['cart'] as $id => $value) {
		$stmt->bindValue(($i++), $id);
	}
	$stmt->setFetchMode(PDO::FETCH_OBJ);
	$stmt->execute();
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Client is paying
	foreach ($_SESSION['cart'] as $id => $count) {
        // Remove articles from the shelves
        // TODO : Check whether there is enough stock.
		$stmt = $db->prepare("UPDATE productlist SET number = number - ? WHERE id = ?");
		$stmt->bindValue(1, $count);
        $stmt->bindValue(2, $id);
		$stmt->execute();
		// TODO : Check here if checkout was successful (missing items ?)
	}
    // Customer "paid", empty its cart
	$_SESSION['cart'] = array();
	echo "You'll receive your items in TWO WEEKS, thank's for your money. Have a nice day ! <a href='./products.php'>Return to products</a>";
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
    <link rel="stylesheet" type="text/css" href="./css/theme.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <?php echo $row->number ?> available
                    <br>
                    <button data-art="<?php echo $row->id ?>" type="button" class="buy btn btn-lg btn-primary">Update</button>
                    <br>
                    <input type='number' min='0' name='qty' value='<?php echo $_SESSION['cart'][$row->id] ?>' id='qty-<?php echo $row->id ?>'> 
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