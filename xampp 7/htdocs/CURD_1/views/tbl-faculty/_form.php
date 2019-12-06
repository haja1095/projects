<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblFaculty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-faculty-form">

    <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']]); ?>

    <?= $form->field($model, 'photo')->begin(); ?>
<?= Html::activeLabel($model,'photo', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'photo', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'photo', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'photo')->end(); ?>

    <?= $form->field($model, 'name')->begin(); ?>
<?= Html::activeLabel($model,'name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'name')->end(); ?>

    <?= $form->field($model, 'department')->begin(); ?>
<?= Html::activeLabel($model,'department', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'department', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'department', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'department')->end(); ?>

    <?= $form->field($model, 'email')->begin(); ?>
<?= Html::activeLabel($model,'email', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'email', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'email', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'email')->end(); ?>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-primary btn-sm']) ?>
            <?= Html::resetButton(Html::tag('span', null,['class'=>'ace-icon fa fa-undo bigger-110']).'Reset', ['class' => 'btn btn-sm']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
