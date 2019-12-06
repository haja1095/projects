<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblBackend */

$this->title = 'Create Tbl Backend';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Backends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-backend-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
