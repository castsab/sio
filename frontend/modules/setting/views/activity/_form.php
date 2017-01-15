<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\models\OptionComboForm;
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(['id'=>'activity-form']); ?>

    <?= $form->field($model, 'id_service')->hiddenInput(['value'=>$id_service])->label(false) ?>
    
    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?php 
    if(!$model->isNewRecord)
        echo $form->field($model, 'state')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::REGISTRY_STATUS),['prompt'=>Yii::t('app','Select')]); 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
