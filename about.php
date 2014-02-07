<!DOCTYPE html>
<html>
<head>
    <title>RobotWithMe - About us </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="./css/sticky_footer.css">

    <link rel="stylesheet" type="text/css" href="./css/jcarousel.basic.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        .block label { 
            display: inline-block;
            width: 100px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div id="wrap">
        <div class="navbar navbar-inverse navbar-fixed-top wrap" role="navigation">
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
                        <li class="active"><a href="./about.php">About us</a></li>
                        <li><a href="./products.php">Products</a></li>
                        <li><a href="./register.php">Register</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">

            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="./img/gabe.jpg" width="600" height="400" alt=""></li>
                        <li><img src="./img/jackson.jpg" width="600" height="400" alt=""></li>
                        <li><img src="./img/gabe.jpg" width="600" height="400" alt=""></li>
                        <li><img src="./img/jackson.jpg" width="600" height="400" alt=""></li>
                    </ul>
                </div>

                <p class="photo-credits">
                    Photos by <a href="http://www.perdu.com">Internet</a>
                </p>

                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                     <p class="jcarousel-pagination">
                        
                    </p>
            </div>

            <div class="well">
                <h1>Who we are</h1>
                <p>We are a ...</p>
            </div>
            <div class="well">
                <h1>Sponsors</h1>
                <ul>
                    <li>Valve</li><li>CocaCola</li><li>Doritos</li><li>Monster</li>
                </ul>
            </div>
            <div class="well">
                <h1>Contact us</h1>
                <p>eric@linux.com <br> 6 allée de GabeN</p>
            </div>
        </div>
        <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="credit">Copyright 2014 Mathieu Degaine & <a href="http://me.linuxw.info">Éric Gillet</a>.</p>
      </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="./js/jcarousel.basic.js"></script>
</body>
</html>