<?php
$total_slider = count($ad->getAdsSlider());
?>
<section id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <?php include 'search.php'; ?>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div id="carouselAds" class="carousel slide wow bounceIn" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        for ($i = 0; $i < $total_slider; $i++) {
                            if ($i == 0) {
                                $active = true;
                            } else {
                                $active = false;
                            }

                            echo '<li data-target="#carouselAds" data-slide-to="' . $i . '" class="' . (($active) ? 'active' : '') . '"></li>';
                        }
                        ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $c = 0;
                        foreach ($ad->getAdsSlider() as $key) {
                            if ($c == 0) {
                                $active = true;
                            } else {
                                $active = false;
                            }
                            echo '<div class="item' . (($active) ? ' active' : '') . '">';
                            echo '<img class="img-responsive" src="./assets/img/publi/' . $key["ID"] . '.jpg" alt="' . $key["TITULO"] . '">';
                            echo '</div>';
                            $c++;
                        }
                        ?>
                    </div>
                    <a class="left carousel-control" href="#carouselAds" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselAds" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="ns-pd bgw">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-xs-6 col-lg-2">
                    <a href="#">
                        <img src="./assets/img/categories/s/1.jpg" class="img-responsive">
                    </a>
                </div>
                <div class="col-xs-6 col-lg-2">
                    <a href="#">
                        <img src="./assets/img/categories/s/2.jpg" class="img-responsive">
                    </a>
                </div>
                <div class="col-xs-6 col-lg-2">
                    <a href="#">
                        <img src="./assets/img/categories/s/3.jpg" class="img-responsive shine">
                    </a>
                </div>
                <div class="col-xs-6 col-lg-2">
                    <a href="#">
                        <img src="./assets/img/categories/s/4.jpg" class="img-responsive shine">
                    </a>
                </div>
                <div class="col-xs-6 col-lg-2">
                    <a href="#">
                        <img src="./assets/img/categories/s/5.jpg" class="img-responsive shine">
                    </a>
                </div>
                <div class="col-xs-6 col-lg-2">
                    <a href="#">
                        <img src="./assets/img/categories/s/6.jpg" class="img-responsive shine">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="sec-cat" class="ns-pd wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-lg-3">
                    <img src="./assets/img/categories/i/nacional.jpg" class="img-responsive shdw-a">
                </div>
                <div class="col-xs-6 col-lg-3">
                    <img src="./assets/img/categories/i/internacional.jpg" class="img-responsive shdw-a">
                </div>
                <div class="col-xs-6 col-lg-3">
                    <img src="./assets/img/categories/i/ofertas.jpg" class="img-responsive shdw-a">
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="panel panel-rutas">
                        <img src="./assets/img/categories/i/caribe.jpg" class="img-responsive shdw-a">
                    </div>
                </div>
            </div>
        </div>
</section>