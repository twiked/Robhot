<?php $currentpage = "about" ?>

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
        .well {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div id="wrap">
        <?php include "header.php" ?>
        <div class="container">

            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="./img/gabe.jpg" width="600" height="400" alt=""></li>
                        <li><img src="./img/jackson.jpg" width="600" height="400" alt=""></li>
                        <li><img src="./img/mindblown.gif" width="600" height="400" alt=""></li>
                        <li><iframe width="599" height="337" src="//www.youtube.com/embed/GGPIQ72-2Vg" frameborder="0" allowfullscreen></iframe></li>
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
                    <li>Valve</li>
                    <li>CocaCola</li>
                    <li>Doritos</li>
                    <li>Monster</li>
                    <li>OBEY</li>
                    <li>Darty</li>
                </ul>
            </div>
            <div class="well">
                <h1>Contact us</h1>
                <p>eric@linux.com <br> 6 allée de GabeN</p>
                <iframe width="100%" height="300" frameBorder="0" src="http://umap.openstreetmap.fr/fr/map/carte-sans-nom_4983?scaleControl=0&ampminiMap=0&ampscrollWheelZoom=0&ampallowEdit=0"></iframe>
            </div>
        </div>
        <div id="push"></div>
    </div>

    <?php include "footer.php" ?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="./js/jcarousel.basic.js"></script>
</body>
</html>