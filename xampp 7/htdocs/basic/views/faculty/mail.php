<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Faculty */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-view">
    hfhsdklhfklsdflskhdflhksdf

    <img src="<?= Yii::$app->request->baseUrl . '/uploads/' . $model->photo ?>" class=" img-responsive" >

  <!-- <img src="<?/*= $result->embed(Yii::$app->request->baseUrl . '/uploads/' . $model->photo); */?>" class=" img-responsive">-->

</div>
