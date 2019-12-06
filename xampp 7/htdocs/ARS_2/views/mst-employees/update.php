<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MstEmployees */

$this->title = 'Update Mst Employees: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mst Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-content">
    <div class="page-header">
        <h1>
            <?= Html::encode($this->title) ?>
        </h1>
    </div>
    <div class="mst-employees-update">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>