<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 2/13/18
 * Time: 12:03 PM
 */
?>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed btn-lg" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <div id="nav-icon4" aria-label="menu toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div id="logo" class="img-responsive navbar-brand"
                 <?php
                 if (strpos(substr($_SERVER['SCRIPT_NAME'], 0, 6), 'index') !== false) {
                     echo 'style="display:none;"';
                 }
                 echo '>';
                 ?>
                <a href="/"><img class="top" src="img/branding/logo.png" alt="TADA The Atlanta Dance Academy" /></a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schedule<span class="caret"></span></a>
                    <ul class="dropdown-menu drop-box">
                        <li><a href="/adult-schedule">Adults</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/kid-schedule">Kids</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Classes<span class="caret"></span></a>
                    <ul class="dropdown-menu drop-box">
                        <li><a href="/adult-classes">Adults</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/kid-classes">Kids</a></li>
                    </ul>
                </li>
                <li><a href="/our-team">Team</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
