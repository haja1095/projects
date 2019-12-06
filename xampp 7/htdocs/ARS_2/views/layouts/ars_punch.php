<?php
    use app\assets\TableAsset;
    TableAsset::register($this);
?>

<?= $content ?>

<script type="text/javascript">
    $("table").rtResponsiveTables();
</script>
