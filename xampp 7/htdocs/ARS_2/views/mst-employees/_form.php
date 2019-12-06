<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstEmployees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-employees-form">

    <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']]); ?>

    <?= $form->field($model, 'mst_institution_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_institution_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_institution_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_institution_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_institution_id')->end(); ?>

    <?= $form->field($model, 'mst_department_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_department_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_department_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_department_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_department_id')->end(); ?>

    <?= $form->field($model, 'mst_designation_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_designation_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_designation_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_designation_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_designation_id')->end(); ?>

    <?= $form->field($model, 'salutation')->begin(); ?>
<?= Html::activeLabel($model,'salutation', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'salutation', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'salutation', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'salutation')->end(); ?>

    <?= $form->field($model, 'emp_fname')->begin(); ?>
<?= Html::activeLabel($model,'emp_fname', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_fname', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_fname', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_fname')->end(); ?>

    <?= $form->field($model, 'emp_mname')->begin(); ?>
<?= Html::activeLabel($model,'emp_mname', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_mname', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_mname', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_mname')->end(); ?>

    <?= $form->field($model, 'emp_lname')->begin(); ?>
<?= Html::activeLabel($model,'emp_lname', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_lname', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_lname', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_lname')->end(); ?>

    <?= $form->field($model, 'emp_type')->begin(); ?>
<?= Html::activeLabel($model,'emp_type', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_type', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_type', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_type')->end(); ?>

    <?= $form->field($model, 'emp_guardtype')->begin(); ?>
<?= Html::activeLabel($model,'emp_guardtype', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_guardtype', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_guardtype', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_guardtype')->end(); ?>

    <?= $form->field($model, 'emp_guardname')->begin(); ?>
<?= Html::activeLabel($model,'emp_guardname', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_guardname', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_guardname', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_guardname')->end(); ?>

    <?= $form->field($model, 'emp_maritalstatus')->begin(); ?>
<?= Html::activeLabel($model,'emp_maritalstatus', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_maritalstatus', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_maritalstatus', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_maritalstatus')->end(); ?>

    <?= $form->field($model, 'emp_dob')->begin(); ?>
<?= Html::activeLabel($model,'emp_dob', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_dob', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_dob', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_dob')->end(); ?>

    <?= $form->field($model, 'emp_age')->begin(); ?>
<?= Html::activeLabel($model,'emp_age', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_age', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_age', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_age')->end(); ?>

    <?= $form->field($model, 'emp_gender')->begin(); ?>
<?= Html::activeLabel($model,'emp_gender', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_gender', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_gender', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_gender')->end(); ?>

    <?= $form->field($model, 'emp_nationality')->begin(); ?>
<?= Html::activeLabel($model,'emp_nationality', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_nationality', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_nationality', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_nationality')->end(); ?>

    <?= $form->field($model, 'emp_qual')->begin(); ?>
<?= Html::activeLabel($model,'emp_qual', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_qual', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_qual', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_qual')->end(); ?>

    <?= $form->field($model, 'emp_jdate')->begin(); ?>
<?= Html::activeLabel($model,'emp_jdate', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_jdate', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_jdate', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_jdate')->end(); ?>

    <?= $form->field($model, 'emp_rdate')->begin(); ?>
<?= Html::activeLabel($model,'emp_rdate', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_rdate', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_rdate', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_rdate')->end(); ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_omail')->begin(); ?>
<?= Html::activeLabel($model,'emp_omail', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_omail', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_omail', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_omail')->end(); ?>

    <?= $form->field($model, 'emp_pmail')->begin(); ?>
<?= Html::activeLabel($model,'emp_pmail', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_pmail', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_pmail', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_pmail')->end(); ?>

    <?= $form->field($model, 'emp_handphone')->begin(); ?>
<?= Html::activeLabel($model,'emp_handphone', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_handphone', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_handphone', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_handphone')->end(); ?>

    <?= $form->field($model, 'emp_landphone')->begin(); ?>
<?= Html::activeLabel($model,'emp_landphone', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_landphone', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_landphone', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_landphone')->end(); ?>

    <?= $form->field($model, 'emp_paddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_pcountry_id')->begin(); ?>
<?= Html::activeLabel($model,'emp_pcountry_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_pcountry_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_pcountry_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_pcountry_id')->end(); ?>

    <?= $form->field($model, 'emp_pstate_id')->begin(); ?>
<?= Html::activeLabel($model,'emp_pstate_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_pstate_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_pstate_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_pstate_id')->end(); ?>

    <?= $form->field($model, 'emp_pcity_id')->begin(); ?>
<?= Html::activeLabel($model,'emp_pcity_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_pcity_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_pcity_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_pcity_id')->end(); ?>

    <?= $form->field($model, 'emp_caddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_ccountry_id')->begin(); ?>
<?= Html::activeLabel($model,'emp_ccountry_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_ccountry_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_ccountry_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_ccountry_id')->end(); ?>

    <?= $form->field($model, 'emp_cstate_id')->begin(); ?>
<?= Html::activeLabel($model,'emp_cstate_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_cstate_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_cstate_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_cstate_id')->end(); ?>

    <?= $form->field($model, 'emp_ccity_id')->begin(); ?>
<?= Html::activeLabel($model,'emp_ccity_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_ccity_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_ccity_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_ccity_id')->end(); ?>

    <?= $form->field($model, 'emp_photo')->begin(); ?>
<?= Html::activeLabel($model,'emp_photo', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_photo', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_photo', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_photo')->end(); ?>

    <?= $form->field($model, 'status')->begin(); ?>
<?= Html::activeLabel($model,'status', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'status', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'status', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'status')->end(); ?>

    <?= $form->field($model, 'is_deleted')->begin(); ?>
<?= Html::activeLabel($model,'is_deleted', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_deleted', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_deleted', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_deleted')->end(); ?>

    <?= $form->field($model, 'created_date')->begin(); ?>
<?= Html::activeLabel($model,'created_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'created_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'created_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'created_date')->end(); ?>

    <?= $form->field($model, 'created_by')->begin(); ?>
<?= Html::activeLabel($model,'created_by', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'created_by', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'created_by', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'created_by')->end(); ?>

    <?= $form->field($model, 'modified_date')->begin(); ?>
<?= Html::activeLabel($model,'modified_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'modified_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'modified_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'modified_date')->end(); ?>

    <?= $form->field($model, 'modified_by')->begin(); ?>
<?= Html::activeLabel($model,'modified_by', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'modified_by', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'modified_by', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'modified_by')->end(); ?>

    <?= $form->field($model, 'emp_ext_no')->begin(); ?>
<?= Html::activeLabel($model,'emp_ext_no', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_ext_no', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_ext_no', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_ext_no')->end(); ?>

    <?= $form->field($model, 'user_name')->begin(); ?>
<?= Html::activeLabel($model,'user_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'user_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'user_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'user_name')->end(); ?>

    <?= $form->field($model, 'password')->begin(); ?>
<?= Html::activeLabel($model,'password', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'password', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'password', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'password')->end(); ?>

    <?= $form->field($model, 'emp_guardian_name')->begin(); ?>
<?= Html::activeLabel($model,'emp_guardian_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_guardian_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_guardian_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_guardian_name')->end(); ?>

    <?= $form->field($model, 'emp_mother_name')->begin(); ?>
<?= Html::activeLabel($model,'emp_mother_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_mother_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_mother_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_mother_name')->end(); ?>

    <?= $form->field($model, 'mst_community_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_community_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_community_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_community_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_community_id')->end(); ?>

    <?= $form->field($model, 'mst_caste_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_caste_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_caste_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_caste_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_caste_id')->end(); ?>

    <?= $form->field($model, 'fax')->begin(); ?>
<?= Html::activeLabel($model,'fax', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'fax', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'fax', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'fax')->end(); ?>

    <?= $form->field($model, 'pan')->begin(); ?>
<?= Html::activeLabel($model,'pan', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'pan', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'pan', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'pan')->end(); ?>

    <?= $form->field($model, 'emp_is_physically_challanged')->begin(); ?>
<?= Html::activeLabel($model,'emp_is_physically_challanged', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_is_physically_challanged', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_is_physically_challanged', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_is_physically_challanged')->end(); ?>

    <?= $form->field($model, 'miniority_indicator')->begin(); ?>
<?= Html::activeLabel($model,'miniority_indicator', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'miniority_indicator', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'miniority_indicator', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'miniority_indicator')->end(); ?>

    <?= $form->field($model, 'emp_is_ft_pt')->begin(); ?>
<?= Html::activeLabel($model,'emp_is_ft_pt', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_is_ft_pt', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_is_ft_pt', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_is_ft_pt')->end(); ?>

    <?= $form->field($model, 'appointment_type')->begin(); ?>
<?= Html::activeLabel($model,'appointment_type', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'appointment_type', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'appointment_type', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'appointment_type')->end(); ?>

    <?= $form->field($model, 'faculty_type')->begin(); ?>
<?= Html::activeLabel($model,'faculty_type', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'faculty_type', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'faculty_type', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'faculty_type')->end(); ?>

    <?= $form->field($model, 'mst_course_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_course_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_course_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_course_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_course_id')->end(); ?>

    <?= $form->field($model, 'emp_pay_scale_type')->begin(); ?>
<?= Html::activeLabel($model,'emp_pay_scale_type', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_pay_scale_type', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_pay_scale_type', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_pay_scale_type')->end(); ?>

    <?= $form->field($model, 'emp_salary_mode')->begin(); ?>
<?= Html::activeLabel($model,'emp_salary_mode', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_salary_mode', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_salary_mode', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_salary_mode')->end(); ?>

    <?= $form->field($model, 'emp_bank_acc_no')->begin(); ?>
<?= Html::activeLabel($model,'emp_bank_acc_no', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_bank_acc_no', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_bank_acc_no', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_bank_acc_no')->end(); ?>

    <?= $form->field($model, 'emp_bank_branch_name')->begin(); ?>
<?= Html::activeLabel($model,'emp_bank_branch_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_bank_branch_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_bank_branch_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_bank_branch_name')->end(); ?>

    <?= $form->field($model, 'emp_bank_ifsc_code')->begin(); ?>
<?= Html::activeLabel($model,'emp_bank_ifsc_code', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_bank_ifsc_code', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_bank_ifsc_code', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_bank_ifsc_code')->end(); ?>

    <?= $form->field($model, 'emp_esi_no')->begin(); ?>
<?= Html::activeLabel($model,'emp_esi_no', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_esi_no', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_esi_no', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_esi_no')->end(); ?>

    <?= $form->field($model, 'emp_pf_no')->begin(); ?>
<?= Html::activeLabel($model,'emp_pf_no', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_pf_no', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_pf_no', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_pf_no')->end(); ?>

    <?= $form->field($model, 'teaching_experience')->begin(); ?>
<?= Html::activeLabel($model,'teaching_experience', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'teaching_experience', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'teaching_experience', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'teaching_experience')->end(); ?>

    <?= $form->field($model, 'total_work_experience')->begin(); ?>
<?= Html::activeLabel($model,'total_work_experience', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'total_work_experience', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'total_work_experience', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'total_work_experience')->end(); ?>

    <?= $form->field($model, 'research_experience')->begin(); ?>
<?= Html::activeLabel($model,'research_experience', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'research_experience', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'research_experience', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'research_experience')->end(); ?>

    <?= $form->field($model, 'no_national_publications')->begin(); ?>
<?= Html::activeLabel($model,'no_national_publications', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'no_national_publications', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'no_national_publications', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'no_national_publications')->end(); ?>

    <?= $form->field($model, 'no_of_patents')->begin(); ?>
<?= Html::activeLabel($model,'no_of_patents', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'no_of_patents', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'no_of_patents', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'no_of_patents')->end(); ?>

    <?= $form->field($model, 'no_of_pg_projects_guided')->begin(); ?>
<?= Html::activeLabel($model,'no_of_pg_projects_guided', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'no_of_pg_projects_guided', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'no_of_pg_projects_guided', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'no_of_pg_projects_guided')->end(); ?>

    <?= $form->field($model, 'no_of_doctorate_students_guided')->begin(); ?>
<?= Html::activeLabel($model,'no_of_doctorate_students_guided', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'no_of_doctorate_students_guided', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'no_of_doctorate_students_guided', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'no_of_doctorate_students_guided')->end(); ?>

    <?= $form->field($model, 'no_of_international_publications')->begin(); ?>
<?= Html::activeLabel($model,'no_of_international_publications', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'no_of_international_publications', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'no_of_international_publications', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'no_of_international_publications')->end(); ?>

    <?= $form->field($model, 'no_of_books_published')->begin(); ?>
<?= Html::activeLabel($model,'no_of_books_published', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'no_of_books_published', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'no_of_books_published', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'no_of_books_published')->end(); ?>

    <?= $form->field($model, 'is_first_yr_teacher')->begin(); ?>
<?= Html::activeLabel($model,'is_first_yr_teacher', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_first_yr_teacher', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_first_yr_teacher', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_first_yr_teacher')->end(); ?>

    <?= $form->field($model, 'is_fy_common_subject_teacher')->begin(); ?>
<?= Html::activeLabel($model,'is_fy_common_subject_teacher', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_fy_common_subject_teacher', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_fy_common_subject_teacher', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_fy_common_subject_teacher')->end(); ?>

    <?= $form->field($model, 'fy_common_subject_name')->begin(); ?>
<?= Html::activeLabel($model,'fy_common_subject_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'fy_common_subject_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'fy_common_subject_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'fy_common_subject_name')->end(); ?>

    <?= $form->field($model, 'is_aicte_work_member')->begin(); ?>
<?= Html::activeLabel($model,'is_aicte_work_member', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_aicte_work_member', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_aicte_work_member', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_aicte_work_member')->end(); ?>

    <?= $form->field($model, 'is_aicte_grants_assistance')->begin(); ?>
<?= Html::activeLabel($model,'is_aicte_grants_assistance', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_aicte_grants_assistance', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_aicte_grants_assistance', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_aicte_grants_assistance')->end(); ?>

    <?= $form->field($model, 'is_approve_new')->begin(); ?>
<?= Html::activeLabel($model,'is_approve_new', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_approve_new', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_approve_new', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_approve_new')->end(); ?>

    <?= $form->field($model, 'is_approve_modified')->begin(); ?>
<?= Html::activeLabel($model,'is_approve_modified', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_approve_modified', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_approve_modified', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_approve_modified')->end(); ?>

    <?= $form->field($model, 'nominee_name')->begin(); ?>
<?= Html::activeLabel($model,'nominee_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'nominee_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'nominee_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'nominee_name')->end(); ?>

    <?= $form->field($model, 'nominee_relation')->begin(); ?>
<?= Html::activeLabel($model,'nominee_relation', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'nominee_relation', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'nominee_relation', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'nominee_relation')->end(); ?>

    <?= $form->field($model, 'emp_bank_name')->begin(); ?>
<?= Html::activeLabel($model,'emp_bank_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_bank_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_bank_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_bank_name')->end(); ?>

    <?= $form->field($model, 'emp_handphone_1')->begin(); ?>
<?= Html::activeLabel($model,'emp_handphone_1', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_handphone_1', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_handphone_1', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_handphone_1')->end(); ?>

    <?= $form->field($model, 'mst_blood_group_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_blood_group_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_blood_group_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_blood_group_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_blood_group_id')->end(); ?>

    <?= $form->field($model, 'emp_basic_pay')->begin(); ?>
<?= Html::activeLabel($model,'emp_basic_pay', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_basic_pay', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_basic_pay', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_basic_pay')->end(); ?>

    <?= $form->field($model, 'emp_gross_pay')->begin(); ?>
<?= Html::activeLabel($model,'emp_gross_pay', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_gross_pay', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_gross_pay', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_gross_pay')->end(); ?>

    <?= $form->field($model, 'emp_hra')->begin(); ?>
<?= Html::activeLabel($model,'emp_hra', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_hra', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_hra', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_hra')->end(); ?>

    <?= $form->field($model, 'emp_other_allowance')->begin(); ?>
<?= Html::activeLabel($model,'emp_other_allowance', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_other_allowance', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_other_allowance', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_other_allowance')->end(); ?>

    <?= $form->field($model, 'emp_da_percentage')->begin(); ?>
<?= Html::activeLabel($model,'emp_da_percentage', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_da_percentage', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_da_percentage', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_da_percentage')->end(); ?>

    <?= $form->field($model, 'emp_bio_metric_id1')->begin(); ?>
<?= Html::activeLabel($model,'emp_bio_metric_id1', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_bio_metric_id1', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_bio_metric_id1', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_bio_metric_id1')->end(); ?>

    <?= $form->field($model, 'emp_bio_metric_id2')->begin(); ?>
<?= Html::activeLabel($model,'emp_bio_metric_id2', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_bio_metric_id2', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_bio_metric_id2', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_bio_metric_id2')->end(); ?>

    <?= $form->field($model, 'emp_religion')->begin(); ?>
<?= Html::activeLabel($model,'emp_religion', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_religion', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_religion', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_religion')->end(); ?>

    <?= $form->field($model, 'emp_ars_track')->begin(); ?>
<?= Html::activeLabel($model,'emp_ars_track', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_ars_track', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_ars_track', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_ars_track')->end(); ?>

    <?= $form->field($model, 'profile_edit_flag')->begin(); ?>
<?= Html::activeLabel($model,'profile_edit_flag', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'profile_edit_flag', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'profile_edit_flag', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'profile_edit_flag')->end(); ?>

    <?= $form->field($model, 'approve_message_flag')->begin(); ?>
<?= Html::activeLabel($model,'approve_message_flag', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'approve_message_flag', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'approve_message_flag', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'approve_message_flag')->end(); ?>

    <?= $form->field($model, 'emp_is_phychallanged')->begin(); ?>
<?= Html::activeLabel($model,'emp_is_phychallanged', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_is_phychallanged', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_is_phychallanged', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_is_phychallanged')->end(); ?>

    <?= $form->field($model, 'employee_status')->begin(); ?>
<?= Html::activeLabel($model,'employee_status', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'employee_status', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'employee_status', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'employee_status')->end(); ?>

    <?= $form->field($model, 'resigned_date')->begin(); ?>
<?= Html::activeLabel($model,'resigned_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'resigned_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'resigned_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'resigned_date')->end(); ?>

    <?= $form->field($model, 'resigned_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'suspended_from_date')->begin(); ?>
<?= Html::activeLabel($model,'suspended_from_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'suspended_from_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'suspended_from_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'suspended_from_date')->end(); ?>

    <?= $form->field($model, 'suspended_to_date')->begin(); ?>
<?= Html::activeLabel($model,'suspended_to_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'suspended_to_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'suspended_to_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'suspended_to_date')->end(); ?>

    <?= $form->field($model, 'suspended_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'spouse_name')->begin(); ?>
<?= Html::activeLabel($model,'spouse_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'spouse_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'spouse_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'spouse_name')->end(); ?>

    <?= $form->field($model, 'father_name')->begin(); ?>
<?= Html::activeLabel($model,'father_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'father_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'father_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'father_name')->end(); ?>

    <?= $form->field($model, 'scan_signature')->begin(); ?>
<?= Html::activeLabel($model,'scan_signature', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'scan_signature', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'scan_signature', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'scan_signature')->end(); ?>

    <?= $form->field($model, 'state_of_origin')->begin(); ?>
<?= Html::activeLabel($model,'state_of_origin', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'state_of_origin', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'state_of_origin', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'state_of_origin')->end(); ?>

    <?= $form->field($model, 'caddress_1')->begin(); ?>
<?= Html::activeLabel($model,'caddress_1', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'caddress_1', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'caddress_1', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'caddress_1')->end(); ?>

    <?= $form->field($model, 'caddress_2')->begin(); ?>
<?= Html::activeLabel($model,'caddress_2', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'caddress_2', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'caddress_2', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'caddress_2')->end(); ?>

    <?= $form->field($model, 'caddress_3')->begin(); ?>
<?= Html::activeLabel($model,'caddress_3', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'caddress_3', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'caddress_3', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'caddress_3')->end(); ?>

    <?= $form->field($model, 'paddress_1')->begin(); ?>
<?= Html::activeLabel($model,'paddress_1', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'paddress_1', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'paddress_1', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'paddress_1')->end(); ?>

    <?= $form->field($model, 'paddress_2')->begin(); ?>
<?= Html::activeLabel($model,'paddress_2', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'paddress_2', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'paddress_2', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'paddress_2')->end(); ?>

    <?= $form->field($model, 'paddress_3')->begin(); ?>
<?= Html::activeLabel($model,'paddress_3', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'paddress_3', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'paddress_3', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'paddress_3')->end(); ?>

    <?= $form->field($model, 'scale_of_pay')->begin(); ?>
<?= Html::activeLabel($model,'scale_of_pay', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'scale_of_pay', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'scale_of_pay', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'scale_of_pay')->end(); ?>

    <?= $form->field($model, 'next_increment_date')->begin(); ?>
<?= Html::activeLabel($model,'next_increment_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'next_increment_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'next_increment_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'next_increment_date')->end(); ?>

    <?= $form->field($model, 'substitute_faculty_id')->begin(); ?>
<?= Html::activeLabel($model,'substitute_faculty_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'substitute_faculty_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'substitute_faculty_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'substitute_faculty_id')->end(); ?>

    <?= $form->field($model, 'fip_start_date')->begin(); ?>
<?= Html::activeLabel($model,'fip_start_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'fip_start_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'fip_start_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'fip_start_date')->end(); ?>

    <?= $form->field($model, 'fip_end_date')->begin(); ?>
<?= Html::activeLabel($model,'fip_end_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'fip_end_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'fip_end_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'fip_end_date')->end(); ?>

    <?= $form->field($model, 'nature_of_handicap')->begin(); ?>
<?= Html::activeLabel($model,'nature_of_handicap', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'nature_of_handicap', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'nature_of_handicap', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'nature_of_handicap')->end(); ?>

    <?= $form->field($model, 'emp_physically_challanged_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_spouse_name')->begin(); ?>
<?= Html::activeLabel($model,'emp_spouse_name', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_spouse_name', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_spouse_name', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_spouse_name')->end(); ?>

    <?= $form->field($model, 'emp_com_paddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_com_caddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_fullname')->begin(); ?>
<?= Html::activeLabel($model,'emp_fullname', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_fullname', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_fullname', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_fullname')->end(); ?>

    <?= $form->field($model, 'area_of_specialization')->begin(); ?>
<?= Html::activeLabel($model,'area_of_specialization', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'area_of_specialization', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'area_of_specialization', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'area_of_specialization')->end(); ?>

    <?= $form->field($model, 'mst_programme_id')->begin(); ?>
<?= Html::activeLabel($model,'mst_programme_id', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'mst_programme_id', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'mst_programme_id', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'mst_programme_id')->end(); ?>

    <?= $form->field($model, 'seniority_order')->begin(); ?>
<?= Html::activeLabel($model,'seniority_order', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'seniority_order', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'seniority_order', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'seniority_order')->end(); ?>

    <?= $form->field($model, 'is_emp_qualified')->begin(); ?>
<?= Html::activeLabel($model,'is_emp_qualified', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'is_emp_qualified', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'is_emp_qualified', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'is_emp_qualified')->end(); ?>

    <?= $form->field($model, 'emp_qualified_type')->begin(); ?>
<?= Html::activeLabel($model,'emp_qualified_type', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_qualified_type', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_qualified_type', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_qualified_type')->end(); ?>

    <?= $form->field($model, 'emp_qualification_approval_no')->begin(); ?>
<?= Html::activeLabel($model,'emp_qualification_approval_no', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_qualification_approval_no', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_qualification_approval_no', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_qualification_approval_no')->end(); ?>

    <?= $form->field($model, 'emp_qualification_approval_date')->begin(); ?>
<?= Html::activeLabel($model,'emp_qualification_approval_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_qualification_approval_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_qualification_approval_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_qualification_approval_date')->end(); ?>

    <?= $form->field($model, 'emp_qualification_temp_approval_no')->begin(); ?>
<?= Html::activeLabel($model,'emp_qualification_temp_approval_no', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_qualification_temp_approval_no', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_qualification_temp_approval_no', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_qualification_temp_approval_no')->end(); ?>

    <?= $form->field($model, 'emp_qualification_temp_approval_date')->begin(); ?>
<?= Html::activeLabel($model,'emp_qualification_temp_approval_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_qualification_temp_approval_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_qualification_temp_approval_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_qualification_temp_approval_date')->end(); ?>

    <?= $form->field($model, 'emp_qualification_temp_approval_exp_date')->begin(); ?>
<?= Html::activeLabel($model,'emp_qualification_temp_approval_exp_date', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_qualification_temp_approval_exp_date', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_qualification_temp_approval_exp_date', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_qualification_temp_approval_exp_date')->end(); ?>

    <?= $form->field($model, 'emp_omail_domain')->begin(); ?>
<?= Html::activeLabel($model,'emp_omail_domain', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_omail_domain', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_omail_domain', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_omail_domain')->end(); ?>

    <?= $form->field($model, 'empno')->begin(); ?>
<?= Html::activeLabel($model,'empno', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'empno', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'empno', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'empno')->end(); ?>

    <?= $form->field($model, 'emp_sname')->begin(); ?>
<?= Html::activeLabel($model,'emp_sname', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_sname', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_sname', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_sname')->end(); ?>

    <?= $form->field($model, 'emp_pzipcode')->begin(); ?>
<?= Html::activeLabel($model,'emp_pzipcode', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_pzipcode', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_pzipcode', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_pzipcode')->end(); ?>

    <?= $form->field($model, 'emp_czipcode')->begin(); ?>
<?= Html::activeLabel($model,'emp_czipcode', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'emp_czipcode', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'emp_czipcode', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'emp_czipcode')->end(); ?>

    <?= $form->field($model, 'adhar_no')->begin(); ?>
<?= Html::activeLabel($model,'adhar_no', ['class'=>'col-xs-12 col-sm-3 col-md-3 control-label no-padding-right']); ?>
<div class="col-xs-12 col-sm-5">
<?= Html::activeTextInput($model, 'adhar_no', ['class'=>'width-100']); ?>
</div><div class="help-block col-xs-12 col-sm-reset inline">
<?= Html::error($model,'adhar_no', ['class' => 'help-block col-xs-12 col-sm-reset inline']); ?> 
</div><?= $form->field($model, 'adhar_no')->end(); ?>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-primary btn-sm']) ?>
            <?= Html::resetButton(Html::tag('span', null,['class'=>'ace-icon fa fa-undo bigger-110']).'Reset', ['class' => 'btn btn-sm']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
