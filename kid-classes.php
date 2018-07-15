<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 3/8/18
 * Time: 8:40 PM
 */

include 'includes/header.php';
include 'includes/nav.php';


$url = 'data/kids.json';
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>


<section id="top-content" class="kid-bg parallax">
    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="schedule-box" id="kid">
                        <?php
                        foreach ($characters['feed']['entry'] as $item) {
                            if ($item['gsx$classtitle']['$t'] != "" && $item['gsx$classtitle']['$t'] != "") {
                                echo '<h3>' . $item['gsx$classtitle']['$t'] . '<h3>';
                                echo '<p class="text-grey">' . $item['gsx$classtext']['$t'] . '</p>';
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
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h3>KIDS PRICES</h3></a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <h2 class="t-title">Ballet</h2>
                                    <table class="table">
                                        <colgroup>
                                            <col span="1" style="width: 40%;"/>
                                            <col span="1" style="width: 50%;"/>
                                            <col span="1" style="width: 10%;"/>
                                        </colgroup>
                                        <tbody>
                                        <?php
                                        foreach ($characters['feed']['entry'] as $item) {
                                            echo '<tr>';
                                            if ($item['gsx$ballettitle']['$t'] != "") {
                                                echo '<td>' . $item['gsx$ballettitle']['$t'] . '</td>';
                                                echo '<td>' . $item['gsx$balletdescrip']['$t'] . '</td>';
                                                echo '<td>' . $item['gsx$balletrate']['$t'] . '</td>';
                                            }
                                            echo '</tr>';
                                        }
                                        ?>
                                        </tbody>


                                    </table>
                                    <h2 class="t-title">Tap, Hip-Hop, and Jazz</h2>
                                    <table class="table">
                                        <colgroup>
                                            <col span="1" style="width: 40%;"/>
                                            <col span="1" style="width: 50%;"/>
                                            <col span="1" style="width: 10%;"/>
                                        </colgroup>
                                        <tbody>
                                        <?php
                                        foreach ($characters['feed']['entry'] as $item) {
                                            echo '<tr>';
                                            if ($item['gsx$othertitle']['$t'] != "") {
                                                echo '<td>' . $item['gsx$othertitle']['$t'] . '</td>';
                                                echo '<td>' . $item['gsx$otherdescrip']['$t'] . '</td>';
                                                echo '<td>' . $item['gsx$otherrate']['$t'] . '</td>';
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

        <div class="row nav2">
            <!-- Split button -->
            <div class="btn-group mobile">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Class Type
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$widgetclasstitle']['$t'] != "") {
                            echo '<li><a href="#', $item['gsx$widgetclassid']['$t'], '" class="page-scroll">';
                            echo $item['gsx$widgetclasstitle']['$t'];
                            echo '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="btn-group btn-group-justified desktop" role="group" aria-label="Select Class Type">
                <?php
                foreach ($characters['feed']['entry'] as $item) {
                    if ($item['gsx$widgetclasstitle']['$t'] != "") {
                        echo '<a href="#', $item['gsx$widgetclassid']['$t'], '" class="page-scroll btn btn-default" role="link">';
                        echo $item['gsx$widgetclasstitle']['$t'];
                        echo '</a>';
                    }
                }
                ?>
            </div>
        </div>

        <?php
        foreach ($characters['feed']['entry'] as $item) {
            if ($item['gsx$widgetclassid']['$t'] != "") {
                echo '<div class="row" id="',$item['gsx$widgetclassid']['$t'],'">';
                echo '<div class="col-sm-12">';
                echo '<healcode-widget data-type="enrollments" data-widget-partner="object" data-widget-version="0.1" data-widget-id="' . $item['gsx$widgetclassid']['$t'] . '"></healcode-widget>';
                echo '</div></div>';
            }
        }
        ?>

    </div>
</section>

<?php
include 'includes/footer.php';
?>
<script>
    // Offset for Main Navigation = none
    $( "#mainNav" ).addClass( "affix" );
</script>
</body>
</html>
