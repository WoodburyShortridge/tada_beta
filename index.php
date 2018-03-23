<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 2/13/18
 * Time: 9:42 AM
 */

include 'includes/header.php';
include 'includes/nav.php';
?>

<header>
    <div id="header" class="header-content">
        <div class="header-content-inner">
            <h1>THE ATLANTA DANCE ACADEMY</h1>
            <a href="#about" class="page-scroll"><i class="fa fa-chevron-down fa-2x down-arrow" aria-hidden="true"></i></span></a>
        </div>
    </div>
</header>

<?php
$url = 'data/home.json';

$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>

<section class="section2-bg parallax" id="about">
    <div class="container">
        <div class="row" id="quote">
            <div class="col-md-8 col-md-offset-2 text-center">
                <?php
                echo '<div>';
                foreach ($characters['feed']['entry'] as $item) {
                    if ($item['gsx$quote']['$t'] != "") {
                        echo '<p class="overlay-white">' . $item['gsx$quote']['$t'] . '</p>';
                    }
                }
                echo '</div>';
                ?>
                <healcode-widget class="btn promo_button btn-xl sr-button" data-type="account-link" data-version="0.2" data-site-id="17373" data-inner-html="Register Now !" data-link-class="healcode-login-register-text-link"></healcode-widget>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row" id="service">
                <?php
                foreach ($characters['feed']['entry'] as $item) {
                    echo '<div class="col-lg-4 col-md-6 text-center">';
                    echo '<a href="' . $item['gsx$slink']['$t'] . '">';
                    echo '<div class="service-box">';
                    echo '<img src="img/services/' . $item['gsx$sphoto']['$t'] . '" alt="' . $item['gsx$salt']['$t'] . '" class="service-img sr-icons">';
                    echo '<h3>' . $item['gsx$stitle']['$t'] . '</h3>';
                    echo '<h4><span class="label label-default">' . $item['gsx$slabel']['$t'] . '</span></h4>';
                    echo '<p class="text-muted">' . $item['gsx$stext']['$t'] . '</p>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
        </div>
    </div>
</section>

<section class="section4-bg parallax" id="reviews">
    <div class="container">
        <div class="row" id="reviewQuotes">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="overlay-white">
                    <i class="fa fa-3x fa-quote-left" aria-hidden="true"></i>
                    <div>
                        <?php
                        foreach ($characters['feed']['entry'] as $item) {
                            if ($item['gsx$reviews']['$t'] != "") {
                                echo '<p>' . $item['gsx$reviews']['$t'] . '</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="insta-contain" class="col-sm-12">
            <div id="instagram"></div>
            <div>
                <a class="btn promo_button btn-xl sr-button" target="_blank"  href="https://www.instagram.com/tada_atl/">MORE PHOTOS</a>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php'
?>
<!-- instagram javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script type="text/javascript" src="js/insta-config.js"></script>
<script>
    // hide logo till scroll
    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > 99) {
            $('#logo').fadeIn();
        }
        else {
            $('#logo').fadeOut();
        }
    });
    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })
</script>
</body>
</html>