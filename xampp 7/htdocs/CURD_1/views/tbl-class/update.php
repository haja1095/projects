<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblClass */

$this->title = 'Update Tbl Class: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-class-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
