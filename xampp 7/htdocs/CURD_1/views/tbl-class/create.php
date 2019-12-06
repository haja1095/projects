<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblClass */

$this->title = 'Create Tbl Class';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
