<?php
$total_slider = count($ad->getAdsSlider());
?>
<section id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <?php include 'search.php'; ?>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div id="carouselAds" class="carousel slide bounceIn animated" data-ride="carousel">
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
    <div class="container-fluid ns-pd">
        <div class="row">
            <div class="col-xs-6 col-lg-2"><a href="#"><img src="./assets/img/sect.jpg" class="img-responsive"></a></div>
            <div class="col-xs-6 col-lg-2"><a href="#"><img src="./assets/img/sect.jpg" class="img-responsive"></a></div>
            <div class="col-xs-6 col-lg-2"><a href="#"><img src="./assets/img/sect.jpg" class="img-responsive"></a></div>
            <div class="col-xs-6 col-lg-2"><a href="#"><img src="./assets/img/sect.jpg" class="img-responsive"></a></div>
            <div class="col-xs-6 col-lg-2"><a href="#"><img src="./assets/img/sect.jpg" class="img-responsive"></a></div>
            <div class="col-xs-6 col-lg-2"><a href="#"><img src="./assets/img/sect.jpg" class="img-responsive"></a></div>
        </div>
    </div>
    <div id="sec-cat" class="ns-pd">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-lg-3">
                    <div class="panel panel-rutas">
                        <div class="panel-heading shadowed bg-nacionales">
                            Paquetes Nacionales
                        </div>
                        <div class="panel-body">
                            <img src="./assets/img/sect_2.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="panel panel-rutas">
                        <div class="panel-heading shadowed bg-internacionales">
                            Paquetes Internacionales
                        </div>
                        <div class="panel-body">
                            <img src="./assets/img/sect_2.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="panel panel-rutas">
                        <div class="panel-heading shadowed bg-ofertas">
                            Paquetes en Oferta
                        </div>
                        <div class="panel-body">
                            <img src="./assets/img/sect_2.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="panel panel-rutas">
                        <div class="panel-heading shadowed bg-confirmadas">
                            Salidas Confirmadas
                        </div>
                        <div class="panel-body">
                            <img src="./assets/img/sect_2.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>