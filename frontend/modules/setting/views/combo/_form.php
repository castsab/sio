<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\OptionComboForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Combo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="combo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    if($model->isNewRecord)
        echo $form->field($model, 'id')->textInput() 
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::REGISTRY_STATUS),['prompt'=>Yii::t('app', 'Select')]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
