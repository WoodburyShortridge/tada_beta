<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 3/12/18
 * Time: 10:07 AM
 */

include 'includes/header.php';
include 'includes/nav.php';

$url = 'data/about.json';
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>

<section id="top-content" class="about-bg parallax">
    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="schedule-box" id="about">
                        <?php
                        foreach ($characters['feed']['entry'] as $item) {
                            if ($item['gsx$abouttitle']['$t'] != "" && $item['gsx$abouttext']['$t'] != "") {
                                echo '<h3>' . $item['gsx$abouttitle']['$t'] . '<h3>';
                                echo '<p class="text-grey">' . $item['gsx$abouttext']['$t'] . '</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <div class="schedule-box" id="values">
                        <h3 >TADA's Core Values</h3>
                        <div class="row values">
                            <?php
                            foreach ($characters['feed']['entry'] as $item) {
                                if ($item['gsx$valueslist']['$t'] != "") {
                                    echo '<div class="col-sm-12 col-lg-4"><p class="text-grey">' . $item['gsx$valueslist']['$t'] . '</p></div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel-group sr-icons" id="accordion">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="modal" data-target=".bs-example-modal-lg" href="#"><h3>RENTAL INFORMATION</h3> <i class="fa fa-expand fa-2x" aria-hidden="true"></i></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 id="myModalLabel">Rental Information</h3>
                    </div>
                    <div class="modal-body">
                        <div>
                            <?php
                            foreach ($characters['feed']['entry'] as $item) {
                                if ($item['gsx$rentalinfo']['$t'] != "") {
                                    echo '<p class="text-grey">' . $item['gsx$rentalinfo']['$t'] . '</p>';
                                }
                            }
                            ?>
                        </div>
                        <table class="table">
                            <colgroup>
                                <col span="1" style="width: 20%;"/>
                                <col span="1" style="width: 30%;"/>
                                <col span="1" style="width: 50%;"/>
                            </colgroup>
                            <tbody>
                            <?php
                            foreach ($characters['feed']['entry'] as $item) {
                                echo '<tr>';
                                if ($item['gsx$rentaltype']['$t'] != "") {
                                    echo '<td>' . $item['gsx$rentaltype']['$t'] . '</td>';
                                } else { echo '<td></td>'; }
                                if ($item['gsx$rentaldescrip']['$t'] != "") {
                                    echo '<td>' . $item['gsx$rentaldescrip']['$t'] . '</td>';
                                }
                                if ($item['gsx$rentalrate']['$t'] != "") {
                                    echo '<td>' . $item['gsx$rentalrate']['$t'] . '</td>';
                                }
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <?php
                        foreach ($characters['feed']['entry'] as $item) {
                            if ($item['gsx$rentalimg']['$t'] != "") {
                                echo '<img src="img/rental/' . $item['gsx$rentalimg']['$t'] . '" alt="tada studio" class="rental-img">';
                            }
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="insta-contain" class="col-sm-12">
            <div>
                <h3>PHOTO<i aria-hidden="true" class="fa fa-instagram fa-2x sr-contact icon" ></i>STREAM<h3>
            </div>
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

<script>
    // Offset for Main Navigation = none
    $( "#mainNav" ).addClass( "affix" );
</script>
<!-- instagram javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script type="text/javascript" src="js/insta-config2.js"></script>
</body>
</html>