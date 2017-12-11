<?php
include_once 'lib/adversiting.class.php';
include_once 'lib/social.class.php';

$ad_bottom = new Adversiting($db);
$banner = $ad->getAdBottom();

$social = new Social($db);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="banner-bottom">
                <a href="<?php echo $banner['LINK']; ?>" target="<?php echo $banner['TARGET']; ?>">
                    <img src="./assets/img/publi/<?php echo $banner['ID']; ?>.jpg"
                         alt="<?php echo $banner['TITULO']; ?>" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                sad
            </div>
            <div class="col-sm-12 col-lg-4">
                <div id="social-section">
                    <div class="spn-1">
                        Síguenos en...
                    </div>
                    <ul class="list-social list-inline">
                        <?php
                        foreach ($social->getActiveSocialsNetworks() as $key) {
                            echo '<li><a href="' . $key["LINK"] . '" target="_blank"><img src="./assets/img/social/' . $key["ID"] . '.png" alt="' . $key["NOMBRE"] . '"></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div id="schedule-section">
                    <div class="spn-1">Atención Personalizada</div>
                    <div class="spn-2"><?php echo $commons->getEmail(); ?></div>
                    <div class="spn-2">963 593 175</div>
                    <div class="spn-2">934 048 608</div>
                    <div class="spn-2">&nbsp;</div>
                    <div class="spn-1">Horarios</div>
                    <div class="row">
                        <div class="col-xs-6 col-lg-5">
                            <div class="spn-2">Lunes a Viernes</div>
                            <div class="spn-2">Sábado</div>
                        </div>
                        <div class="col-xs-6 col-lg-7">
                            <div class="spn-2">9:00 a 21:00</div>
                            <div class="spn-2">9:00 a 17:00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="container">
    <p class="text-center">&copy; <?php echo date('Y'); ?> RutasDelViajero, todos los derechos reservados.</p>
</div>
</body>
</html>