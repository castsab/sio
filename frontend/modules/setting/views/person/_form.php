<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\OptionComboForm;

?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_document')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::TYPE_DOCUMENT),['prompt'=>Yii::t('app','Select')]) ?>

    <?= $form->field($model, 'document')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?php
    if($model->isNewRecord)
        $model->quote_person_natural = 0; 
    
    echo $form->field($model, 'quote_person_natural')->radioList([0 => 'No',1 => 'Si']); 
    ?>

    <?php
    if(!$model->isNewRecord)
        echo $form->field($model, 'status')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::REGISTRY_STATUS),['prompt'=>Yii::t('app','Select')]); 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
