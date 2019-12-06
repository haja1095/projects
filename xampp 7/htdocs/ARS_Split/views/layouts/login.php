<?php
/**
 * Created by PhpStorm.
 * User: sathish.d
 * Date: 11/1/2017
 * Time: 12:22 PM
 */
use app\assets\AppAsset;
AppAsset::register($this);
use app\assets\AdminLtePluginAsset;
AdminLtePluginAsset::register($this);
?>

<?php $this->beginPage() ?>

    <title>ARS</title>

    <?php $this->head() ?>

<?php $this->beginBody() ?>

        <?= $content ?>

<?php $this->endBody() ?>

<script type = "text/javascript" >
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
    window.onhashchange=function(){window.location.hash="no-back-button";}
</script>

<?php $this->endPage() ?>

