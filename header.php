<div class="navbar navbar-inverse navbar-fixed-top wrap" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">RobotWithMe</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if($currentpage=="about") echo "class='active'" ?>><a href="./">About us</a></li>
                <li <?php if($currentpage=="products") echo "class='active'" ?>><a href="./products.php">Products</a></li>
                <li <?php if($currentpage=="register") echo "class='active'" ?>><a href="./register.php">Register</a></li>
            </ul>
        </div>
    </div>
</div>