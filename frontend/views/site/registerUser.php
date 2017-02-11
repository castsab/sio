<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Register user';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <h4><?php echo Yii::t('app', 'Document') . ': ' ?></h4><p><?php echo $modelPerson->document . '<br>'; ?><p>
        <h4><?php echo Yii::t('app', 'Names') . ': ' ?></h4><p><?php echo $modelPerson->first_name . '<br>'; ?><p>
        <h4><?php echo Yii::t('app', 'Last Names') . ': ' ?></h4><p><?php echo $modelPerson->last_name . '<br>'; ?><p>
        <h4><?php echo Yii::t('app', 'Email') . ': ' ?></h4><p><?php echo $modelPerson->email . '<br>'; ?><p>
    </div>    
    
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-confirm-register-user']); ?>

            <?= $form->field($model, 'username')->hiddenInput(['value'=>$modelPerson->email])->label(false) ?>
            <?= $form->field($model, 'email')->hiddenInput(['value'=>$modelPerson->email])->label(false) ?>
            <?= $form->field($model, 'password')->passwordInput()->label(Yii::t('app', 'Password')) ?>
            <?= $form->field($model, 'confirm_password')->passwordInput()->label(Yii::t('app', 'Confirm password')) ?>
                
            <div class="form-group">
                <?= Html::submitButton('Confirm', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
