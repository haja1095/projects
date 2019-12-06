<?php

/* @var $this \yii\web\View */
/* @var $content string */

use evgeniyrru\yii2slick\Slick;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php

/* @var $this \yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
                <?php $this->beginBody() ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                        <meta charset="utf-8" />
    <meta name="description" content="top menu &amp; navigation" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <head>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default navbar-collapse h-navbar">
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    ARS
                </small>
            </a>

            <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                <span class="sr-only">Toggle user menu</span>

                <img src="<?= Yii::$app->request->baseUrl.'/images/user.jpg'?>" alt="Jason's Photo" />
            </button>

            <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue user-min">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?= Yii::$app->request->baseUrl.'/images/user.jpg'?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
            <ul class="nav navbar-nav">
            </ul>
        </nav>
    </div><!-- /.navbar-container -->
</div>
<div class="main-container" id="main-container">

    <div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse">
        <ul class="nav nav-list">
            <li class="open hover">
                <a href="<?= Yii::$app->urlManager->createUrl('mst-students/dashboard')?>">
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <span class="menu-text"> ARS </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="hover">
                        <a href=" <?= Yii::$app->urlManager->createUrl('ars/index') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Employee ARS
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        </ul><!-- /.nav-list -->

    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                </div><!-- /.ace-settings-container -->
                <?= $content?>
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
    </span>
    &nbsp; &nbsp;
</div>
</div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container */-->
<?php //---------------------// ?>

<?php $this->endBody() ?>
<?php $this->endPage() ?>
</body>
</html>

<?php //--------Table view on Mobile-------------// ?>

<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl.'/js/'?>jquery.rtResponsiveTables.min.js" type="text/javascript"></script>
<link   href="<?= Yii::$app->request->baseUrl.'/css/'?>jquery.rtResponsiveTables.css" rel="stylesheet" >
<script type="text/javascript">
    $("table").rtResponsiveTables();
</script>






