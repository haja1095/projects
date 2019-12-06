<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblClass */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-class-form">

    <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']]); ?>

    <?= $form->field($model, 'class_name')->begin(); ?>
<?= Html::activeLabel($model,'class_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'class_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'class_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'class_name')->end(); ?>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-primary btn-sm']) ?>
            <?= Html::resetButton(Html::tag('span', null,['class'=>'ace-icon fa fa-undo bigger-110']).'Reset', ['class' => 'btn btn-sm']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
