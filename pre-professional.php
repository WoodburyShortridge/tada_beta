<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 3/12/18
 * Time: 9:23 AM
 */

include 'includes/header.php';
include 'includes/nav.php';

$url = 'data/prepro.json';
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>

<section id="top-content" class="prepro-bg parallax">
    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="schedule-box" id="prepro">
                        <?php
                        foreach ($characters['feed']['entry'] as $item) {
                            if ($item['gsx$introtitle']['$t'] != "" && $item['gsx$introtext']['$t'] != "") {
                                echo '<h1>' . $item['gsx$introtitle']['$t'] . '<h1>';
                                echo '<p class="text-grey">' . $item['gsx$introtext']['$t'] . '</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


    <section class="no-padding" id="portfolio">
        <div class="container" id="prepro-main">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$preprotitle']['$t'] != "" && $item['gsx$preprotext']['$t'] != "") {
                            echo '<h3>' . $item['gsx$preprotitle']['$t'] . '</h3>';
                            echo '<p class="text-grey">' . $item['gsx$preprotext']['$t'] . '</p>';
                        }
                    }
                    ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$trainingtitle']['$t'] != "") {
                            echo '<h3>' . $item['gsx$trainingtitle']['$t'] . '</h3>';
                        }
                    }
                    ?>
                    <?php
                    echo '<ul>';
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$traininglist']['$t'] != "") {
                            echo '<li><p class="text-grey">' . $item['gsx$traininglist']['$t'] . '</p></li>';
                        }
                    }
                    echo '</ul>';
                    ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$mainimage']['$t'] != "") {
                            echo '<img class="fluid-img" alt="pre-pro" src="img/' . $item['gsx$mainimage']['$t'] . '" >';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$applytitle']['$t'] != "") {
                            echo '<h3>' . $item['gsx$applytitle']['$t'] . '</h3>';
                        }
                    }
                    ?>
                    <?php
                    echo '<ul>';
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$applylist']['$t'] != "") {
                            echo '<li><p class="text-grey">' . $item['gsx$applylist']['$t'] . '</p></li>';
                        }
                    }
                    echo '</ul>';
                    ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$generalauditiontitle']['$t'] != "") {
                            echo '<h3>' . $item['gsx$generalauditiontitle']['$t'] . '</h3>';
                        }
                    }
                    ?>
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$generalauditiontext']['$t'] != "") {
                            echo '<p class="text-grey">' . $item['gsx$generalauditiontext']['$t'] . '</p>';
                        }
                    }
                    ?>
                    <?php
                    echo '<ul>';
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$generalauditionlist']['$t'] != "") {
                            echo '<li><p class="text-grey">' . $item['gsx$generalauditionlist']['$t'] . '</p></li>';
                        }
                    }
                    echo '</ul>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$secondaryimage']['$t'] != "") {
                            echo '<img class="fluid-img" alt="pre-pro" src="img/' . $item['gsx$secondaryimage']['$t'] . '" >';
                        }
                    }
                    ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$generalauditiontitle']['$t'] != "") {
                            echo '<h3>' . $item['gsx$remoteauditiontitle']['$t'] . '</h3>';
                        }
                    }
                    ?>
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$generalauditiontext']['$t'] != "") {
                            echo '<p class="text-grey">' . $item['gsx$remoteauditiontext']['$t'] . '</p>';
                        }
                    }
                    ?>
                    <?php
                    echo '<ul>';
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$generalauditionlist']['$t'] != "") {
                            echo '<li><p class="text-grey">' . $item['gsx$remoteauditionlist']['$t'] . '</p></li>';
                        }
                    }
                    echo '</ul>';
                    ?>
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
