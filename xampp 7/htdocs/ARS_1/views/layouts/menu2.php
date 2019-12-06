<?php
    use yii\helpers\Html;
    use app\assets\AppAsset;
    AppAsset::register($this);
    use app\assets\TableAsset;
    TableAsset::register($this);
?>
<?php $this->beginPage() ?>
                            <!DOCTYPE html>
                            <html lang="<?= Yii::$app->language ?>">
                            <head>
                                <meta charset="<?= Yii::$app->charset ?>">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <?= Html::csrfMetaTags() ?>
                                <title>ARS</title>
                                <?php $this->head() ?>
                            </head>
                            <body>
<?php $this->beginBody() ?>
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                                <meta charset="utf-8" />
                                <title>Top Menu Style - Ace Admin</title>

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
                                                                <?php
                                                                    $data=Yii::$app->user->identity;
                                                                    echo $data['username'];
                                                                ?>
                                                            </span>

                                                            <i class="ace-icon fa fa-caret-down"></i>
                                                        </a><br>
                                                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="<?php echo Yii::$app->urlManager->createUrl('site/logout'); ?>"  data-method="post" >
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
                                                    <li class="active open hover">
                                                        <a href="index.html">
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
                                                                <a href="<?= Yii::$app->urlManager->createUrl('ars/index'); ?>">
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
                                    </div><!-- /.main-container -->
                            </body>
                        </html>
<?php $this->endBody() ?>
<?php $this->endPage() ?>

<script type="text/javascript">
    $("table").rtResponsiveTables();
</script>


