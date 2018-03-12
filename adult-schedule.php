<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 3/12/18
 * Time: 9:01 AM
 */

include 'includes/header.php';
include 'includes/nav.php';


$url = 'data/adults.json';
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>

<section id="top-content" class="adult-bg parallax">
    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="schedule-box" id="adult">
                        <?php
                        foreach ($characters['feed']['entry'] as $item) {
                            if ($item['gsx$scheduletitle']['$t'] != "" && $item['gsx$scheduletitle']['$t'] != "") {
                                echo '<h3>' . $item['gsx$scheduletitle']['$t'] . '<h3>';
                                echo '<p class="text-grey">' . $item['gsx$scheduletext']['$t'] . '</p>';
                            }
                        }
                        ?>
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
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"><h3>ADULT PRICES</h3></a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse">
                                <div class="panel-body" id="prices">
                                    <table class="table">
                                        <colgroup>
                                            <col span="1" style="width: 20%;"/>
                                            <col span="1" style="width: 60%;"/>
                                            <col span="1" style="width: 20%;"/>
                                        </colgroup>
                                        <tbody>
                                        <?php
                                        foreach ($characters['feed']['entry'] as $item) {
                                            echo '<tr>';
                                            if ($item['gsx$ptitle']['$t'] != "") {
                                                echo '<td>' . $item['gsx$ptitle']['$t'] . '</td>';
                                            } else { echo '<td></td>'; }
                                            if ($item['gsx$pdescrip']['$t'] != "") {
                                                echo '<td>' . $item['gsx$pdescrip']['$t'] . '</td>';
                                            }
                                            if ($item['gsx$prate']['$t'] != "") {
                                                echo '<td>' . $item['gsx$prate']['$t'] . '</td>';
                                            }
                                            echo '</tr>';
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section id="heal-code">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="82290857567" data-widget-version="0.1"></healcode-widget>
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
