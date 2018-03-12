<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 3/12/18
 * Time: 9:23 AM
 */

include 'includes/header.php';
include 'includes/nav.php';

$url = 'data/team.json';
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>

<section id="top-content" class="team-bg parallax">
  <section id="schedule">
      <div class="container">
          <div class="row">
            <div class="col-sm-12">
                <div class="schedule-box" id="team">'
                    <?php
                    foreach ($characters['feed']['entry'] as $item) {
                        if ($item['gsx$teamtitle']['$t'] != "") {
                            echo '<img src="img/team/' . $item['gsx$teamphoto']['$t'] . '" alt="' . $item['gsx$teamalt']['$t'] . '" class="team-photo sr-icons">';
                            echo '<h3 >' . $item['gsx$teamtitle']['$t'] . '<span class="label label-default">' . $item['gsx$teamlabel']['$t'] . '</span><h3>';
                            echo '<p class="text-grey">' . $item['gsx$teamtext']['$t'] . '</p>';
                        }
                    }
                    ?>
                </div>
            </div>
          </div>
        </div>
  </section>
</section>

  <section id="heal-code">
    <div class="container" id="heal-team">
      <div class="row">
        <div class="col-sm-12">
          <healcode-widget data-type="staff_lists" data-widget-partner="object" data-widget-id="82195297567" data-widget-version="0.1"></healcode-widget>
        </div>
      </div>
    </div>
  </section>

  <section id="heal-code">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3 class="moretitle">More amazing people that make TADA happen!</h3>
          <div id="moreteam">
              <?php
              foreach ($characters['feed']['entry'] as $item) {
                  if ($item['gsx$tname']['$t'] != "") {
                      echo '<div class="moreteam">';
                      echo '<h3>' . $item['gsx$tname']['$t'] . '</h3>';
                      echo '<img src="img/team/' . $item['gsx$tphoto']['$t'] . '" alt="' . $item['gsx$talt']['$t'] . '" class="moreteam-photo sr-icons">';
                      echo '<p class="text-grey">' . $item['gsx$tbio']['$t'] . '</p>';
                      echo '<a href="mailto:' . $item['gsx$temail']['$t'] . '">' . $item['gsx$temail']['$t']. '</a>';
                      echo '</div>';
                  }
              }
              ?>
          </div>
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
