<?php $currentpage = "about" ?>

<!DOCTYPE html>
<html>
<head>
    <title>Aperture Science - About us </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/sticky_footer.css">
    <link rel="stylesheet" type="text/css" href="./css/jcarousel.basic.css">

    <link rel="stylesheet" type="text/css" href="./css/theme.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <?php include "header.php" ?>
    <div id="wrap">

        <div class="container content">

            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="./img/gabe.jpg" width="600" height="400" alt=""></li>
                        <li><img src="./img/jackson.jpg" width="600" height="400" alt=""></li>
                        <li><img src="./img/mindblown.gif" width="600" height="400" alt=""></li>
                        <li><iframe width="599" height="337" src="//www.youtube.com/embed/GGPIQ72-2Vg" allowfullscreen></iframe></li>
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
                <p>Aperture Science is a French created by Cave Johnson, our company is based in Lyon. We design and sell military androids for home usage</p>
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
                <iframe id="map" src="http://umap.openstreetmap.fr/fr/map/carte-sans-nom_4983?scaleControl=0&amp;miniMap=0&amp;scrollWheelZoom=0&amp;allowEdit=0"></iframe>
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
