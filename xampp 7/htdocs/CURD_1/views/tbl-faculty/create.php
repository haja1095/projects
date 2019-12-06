<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblFaculty */

$this->title = 'Create Tbl Faculty';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-faculty-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
