<?php



    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use app\assets\AppAsset;
    AppAsset::register($this);
    use app\assets\TableAsset;
    TableAsset::register($this);

    AppAsset::register($this);



    $regex = '|(\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\.php)$|';
    preg_match($regex, __FILE__, $matches);


    ?>

<?= $content ?>
<script type="text/javascript">
    $("table").rtResponsiveTables();
</script>
