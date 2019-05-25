<?php
$cat = new category();
?>
<div class="container-fluid con">
    <div class="row tophead">
        <div class="col-8 menu">
            <ul class="items1">
                <li>Home</li>
                <li>Cart</li>
                <li>Contact</li>
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
<nav id="navbar" class="navbar fixed-top navbar-expand-md shadow-sm  flex-nowrap navbar-new-top nv1">
    <div class="row">
        <div class="col-6">
            <a href="#" class="navbar-brand"><img src="img/Seven_News.png" alt=""/></a>
        </div>
        <div class="col-6">
            <ul class="navbar-nav flex-row">
                <?php
                $resultat = $cat->getAllCategory();
                foreach ($resultat as $res) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link px-2"><?= $res['category_name'] ?></a>
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
