<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblFaculty */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content">
    <div class="page-header">
        <h1>
            <?= Html::encode($this->title) ?>
        </h1>
    </div>
    <div class="tbl-faculty-view">

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
            ],
            ]) ?>
        </p>

        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
                    'id',
            'photo',
            'name',
            'department',
            'email:email',
        ],
        ]) ?>

    </div>
</div>