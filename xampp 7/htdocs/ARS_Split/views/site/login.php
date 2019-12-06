<?php
        use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        ARS
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg" style="color: #0000aa">Enter Your Information </p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <div class="form-group has-feedback">
                <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username', 'autofocus' => false, 'class'=>'form-control','id'=>'username'])->label(false) ?>
                <span class="ace-icon fa fa-user form-control-feedback"></span>

            </div>
            <div class="form-group has-feedback">
                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password', 'class'=>'form-control', 'autocomplete' => 'off'])->label(false) ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>

        <?php ActiveForm::end(); ?>
    </div>
    <!-- /.login-box-body -->
</div>
</body>
</html>
