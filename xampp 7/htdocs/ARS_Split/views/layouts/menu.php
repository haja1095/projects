<div class="modal" id="pleaseWaitDialog">
    <!--Loader-->
    <img  id="ajax_loader" src="<?= Yii::$app->request->baseUrl.'/images/ajaxFileExport.gif'?>" style="display:; margin-left:620px; margin-top: 320px; height: 130px; width: 10%;">
</div>

<script type = "text/javascript" >
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
    window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
<?php

use app\assets\AppAsset;
AppAsset::register($this);
use app\assets\AdminLtePluginAsset;
AdminLtePluginAsset::register($this);

use app\assets\TableAsset;
use yii\bootstrap\Html;
TableAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?= Html::csrfMetaTags() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>RS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Employee</b>  ARS</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= Yii::$app->request->baseUrl.'/images/user.jpg'?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo !empty(Yii::$app->user->identity->username)?Yii::$app->user->identity->username :'' ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= Yii::$app->request->baseUrl.'/images/user.jpg'?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo !empty(Yii::$app->user->identity->username)?Yii::$app->user->identity->username :'' ?>
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl('site/logout'); ?>" class="btn btn-default btn-flat" data-method="post">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?= Yii::$app->urlManager->createUrl('ars/index') ?>"><i class="fa fa-circle-o"></i> Employee ARS</a></li>
                            <li><a href=" "><i class="fa fa-circle-o"></i> Menu 2</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <?php $this->head() ?>

        <?php $this->beginBody() ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">

                    <section class="col-lg-12 connectedSortable">

                        <?= $content ?>

                    </section>

                </div>

            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->


<?php $this->endBody() ?>

<script type="text/javascript">
    $("table").rtResponsiveTables();
</script>

<?php $this->endPage() ?>




