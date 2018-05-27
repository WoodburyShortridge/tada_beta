<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 2/13/18
 * Time: 9:42 AM
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
              <div class="schedule-box" id="kid"">
                <?php
                foreach ($characters['feed']['entry'] as $item) {
                    if ($item['gsx$scheduletitle']['$t'] != "" && $item['gsx$scheduletext']['$t'] != "") {
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
      <div class="row">
        <div class="col-sm-12">
            <healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="c629726fa52" data-widget-version="1"></healcode-widget>        </div>
      </div>
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
