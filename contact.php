<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 3/12/18
 * Time: 11:08 AM
 */
include 'includes/header.php';
include 'includes/nav.php';
?>

<section id="top-content" class="contact-bg parallax">
    <section id="schedule">
        <div class="container">
            <div class="schedule-box" id="contacts">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-1 text-center">
                        <i class="fa fa-user fa-3x re-contact sr-contact" aria-hidden="true"></i>
                        <healcode-widget data-type="account-link" data-version="0.2" data-site-id="17373" data-inner-html="<p>Login | Register</p>" data-link-class="healcode-login-register-image-link"></healcode-widget>
                    </div>
                    <div class="col-lg-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>678.827.3737</p>
                    </div>
                    <div class="col-lg-2 text-center">
                        <a href="#heal-code" class="page-scroll">
                            <i aria-hidden="true" class="fa fa-envelope-o fa-3x sr-contact"></i>
                            <p>Message Us</p>
                        </a>
                    </div>
                    <div class="col-lg-4 text-center">
                        <a href="https://www.facebook.com/TADAAtlanta/" aria-label="Facebook"><i aria-hidden="true" class="fa fa-facebook fa-3x sr-contact hover-fx" id='footer'></i></a>
                        <a href="https://www.instagram.com/tada_atl/" aria-label="instagram"><i aria-hidden="true" class="fa fa-instagram fa-3x sr-contact hover-fx" id='footer'></i></a>
                        <a href="https://plus.google.com/118283954490074632040" aria-label="Google Plus"><i aria-hidden="true" class="fa fa-google-plus fa-3x sr-contact hover-fx" id='footer'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section id="heal-code">
    <div class="container">
        <div class="row contacts">
            <div class="col-md-6 col-sm-12 contacts">
                <div class="address">
                    <h3>Contact us</h3>
                </div>
                <div>
                    <healcode-widget data-type="prospects" data-widget-partner="object" data-widget-id="82214867567" data-widget-version="0.1"></healcode-widget>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 contacts">
                <!--
                <div class="address">
                  <h3>2335 Cheshire Bridge Rd NE<br>Atlanta, GA,<br>30324</h3>
                </div>
              -->
                <div class="contact-us-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.7472022334446!2d-84.3534161847911!3d33.818836280669956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f50674325aa98b%3A0x2164eb9bc28c0303!2s2335+Cheshire+Bridge+Rd+NE%2C+Atlanta%2C+GA+30324%2C+USA!5e0!3m2!1sen!2sin!4v1448866011350" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php'
?>

<script>
    // Offset for Main Navigation = none
    $( "#mainNav" ).addClass( "affix" );
</script>
</body>
</html>