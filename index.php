<?php require_once 'config/connect.php';
$stmt = $conn->prepare("SELECT * FROM tbl_category");
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css"/>

    <style>

    </style>
    <title>L7tta News | Sport News Theme</title>
</head>
<body>
<div class="container-fluid con">
    <div class="row tophead">
        <div class="col-8 menu">
            <ul class="items1">
                <li >Home</li>
                <li >Cart</li>
                <li >Contact</li>
            </ul>
        </div>
        <div class="col-4 float-right social_media">
            <ul class="items2">
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-pinterest"></i></li>
                <li><i class="fab fa-youtube"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-facebook-f"></i></li>
            </ul>
        </div>
    </div>
</div>
    <!--Start Navbar -->
<nav id="navbar" class="navbar fixed-top navbar-expand-md shadow-sm  flex-nowrap navbar-new-top nv1">
    <div class="row">
        <div class="col-6">
            <a href="#" class="navbar-brand"><img src="img/Seven_News.png" alt=""/></a>
        </div>
        <div class="col-6">
            <ul class="navbar-nav flex-row">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link px-2"><?=$row->category_name ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
    <!--End   Navbar -->
    <!--Start Slider -->
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/skysports-virgil-van-dijk-liverpool_4664562.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block crsl">
                    <div class="autor">
                        <span class="autname"><img class="autavatar" src="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=60&d=mm&r=g" alt="">Mohamed Oubaha</span>
                        <span class="post-date">May 11,2019</span>
                    </div>
                    <h2>3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/skysports-virgil-van-dijk-liverpool_4664562.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block crsl">
                    <div class="autor">
                        <span class="autname"><img class="autavatar" src="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=60&d=mm&r=g" alt="">Mohamed Oubaha</span>
                        <span class="post-date">May 11,2019</span>
                    </div>
                    <h2>3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/skysports-virgil-van-dijk-liverpool_4664562.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block crsl">
                    <div class="autor">
                        <span class="autname"><img class="autavatar" src="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=60&d=mm&r=g" alt="">Mohamed Oubaha</span>
                        <span class="post-date">May 11,2019</span>
                    </div>
                    <h2>3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
    <!--End   Slider -->

    <!--start   cardslide -->
    <div class="container-fluid">
        <div class="head-trend">
            <h5>TRENDING NOW</h5>
        </div>
        <div class="row" style="margin-right: 30px;margin-left: 30px;">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1449356669056-f1c1e6e56b0f-960x640.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1449356669056-f1c1e6e56b0f-960x640.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1449356669056-f1c1e6e56b0f-960x640.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1449356669056-f1c1e6e56b0f-960x640.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End   cardslide -->
    <!--Start   ADS -->
    <div style="text-align: center;">
        <div class="ads_label">- Advertisement -</div>
        <p class="ads_img">
            <img src="img/ads.png" alt="">
        </p>
    </div>
    <!--End   ADS -->
    <div class="all">
        <div class="row">
            <div class="col-8 p1">
                <div class="row R1">
                    <div class="col-4 img-fluid ">
                        <img class="img-fluid" src="http://themes.themegoods.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1463415268136-e52a5af54519-700x466.jpg" alt="">
                    </div>

                    <div class="col-8 Tx1">
                        <p class="T1 ALPHA">3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</p>
                        <p class="lead ALPHA">lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo […]</p>
                    </div>
                </div>
                <div class="row R1">
                    <div class="col-4 img-fluid ">
                        <img class="img-fluid" src="http://themes.themegoods.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1463415268136-e52a5af54519-700x466.jpg" alt="">
                    </div>

                    <div class="col-8 Tx1">
                        <p class="T1 ALPHA">3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</p>
                        <p class="lead ALPHA">lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo […]</p>
                    </div>
                </div>
            </div>
            <div class="col-4 p2">
                <div>
                    <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandnews/demo5/wp-content/uploads/2016/06/300x250ads.png" alt="" class="img-fluid">
                </div>
                <div class="Rpop">
                    <h2 class="poptitle"><span>Popular Posts</span></h2>
                    <div class="row R1">
                        <div class="col-4 img-fluid LM1">
                            <img class="img-fluid" src="http://themes.themegoods.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1463415268136-e52a5af54519-700x466.jpg" alt="">
                        </div>

                        <div class="col-8 Tx1">
                            <p class="Poptxt">3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</p>
                        </div>
                    </div>
                </div>
                <div class="Rpop">
                    <div class="row R1">
                        <div class="col-4 img-fluid LM1">
                            <img class="img-fluid" src="http://themes.themegoods.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1463415268136-e52a5af54519-700x466.jpg" alt="">
                        </div>

                        <div class="col-8 Tx1">
                            <p class="Poptxt">3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</p>
                        </div>
                    </div>
                </div>
                <div class="Rpop">
                    <div class="row R1">
                        <div class="col-4 img-fluid LM1">
                            <img class="img-fluid" src="http://themes.themegoods.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1463415268136-e52a5af54519-700x466.jpg" alt="">
                        </div>

                        <div class="col-8 Tx1">
                            <p class="Poptxt">3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</p>
                        </div>
                    </div>
                </div>
                <h2 class="poptitle"><span>Popular Posts</span></h2>

            </div>
        </div>
    </div>
    <script src="js/jquery-3.4.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>