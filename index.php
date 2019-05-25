<?php
require_once 'core/classes/autoloader.class.php';
require_once 'config/config.php';
Autoloader::register();
$user = new users();

//echo "<pre>";
//print_r($user->getAllUsers());
//echo "</pre>";
?>
<?php include('core/template/header.php'); ?>
<?php include('core/template/nav.php'); ?>
    <!--Start Navbar -->
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
            <!--            --><?php
            //            $news = $conn->prepare("select * from tbl_news order by news_date DESC LIMIT 2");
            //            $news->execute();
            //            while ($rn = $news->fetch(PDO::FETCH_OBJ)) {
            //
            //                ?>
            <!--            <div class="carousel-item">-->
            <!--                <img src="img/skysports-virgil-van-dijk-liverpool_4664562.jpg" class="d-block w-100" alt="...">-->
            <!--                <div class="carousel-caption d-none d-md-block crsl">-->
            <!--                    <div class="autor">-->
            <!--                        <span class="autname"><img class="autavatar"-->
            <!--                                                   src="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=60&d=mm&r=g"-->
            <!--                                                   alt="">--><? //= $rn->autor ?><!--</span>-->
            <!--                        <span class="post-date">--><? //= $rn->news_date ?><!--</span>-->
            <!--                    </div>-->
            <!--                    <h2>--><? //= $rn->news_title ?><!--</h2>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            --><?php //} ?>
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
                <div class="ln_title">
                    <h4>ALL THE LATEST NEWS</h4>
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
                <div class="ads_label">- Advertisement -</div>
                <div>
                    <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandnews/demo5/wp-content/uploads/2016/06/300x250ads.png" alt="" class="img-fluid">
                </div>
                <div class="Rpop">
                    <h2 class="poptitle"><span>Popular Posts</span></h2>
                    <div class="row R1">
                        <div class="col-4 img-fluid LM1">
                            <div class="post_number">1</div>
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
                            <div class="post_number">2</div>
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
                            <div class="post_number">3</div>
                            <img class="img-fluid" src="http://themes.themegoods.com/grandnews/demo5/wp-content/uploads/2016/03/photo-1463415268136-e52a5af54519-700x466.jpg" alt="">
                        </div>

                        <div class="col-8 Tx1">
                            <p class="Poptxt">3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</p>
                        </div>
                    </div>
                </div>
                <h2 class="poptitle"><span>CATEGORIES</span></h2>

            </div>
        </div>
    </div>
<?php include('core/template/footer.php'); ?>

