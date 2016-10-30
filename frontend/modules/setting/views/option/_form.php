<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\OptionComboForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Option */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="option-form" >

    <?php $form = ActiveForm::begin(['id'=>'option-form']); ?>

    <?= $form->field($model, 'id_combo')->hiddenInput(['value'=>$id_combo])->label(false) ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'state')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::REGISTRY_STATUS),['prompt'=>Yii::t('app', 'Select')]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
