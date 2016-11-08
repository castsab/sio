<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\models\OptionComboForm;
?>

<div class="quote-service-form">

    <?php $form = ActiveForm::begin(['id'=>'quote-service-form']); ?>

    <?= $form->field($model, 'id_quote')->hiddenInput(['value' => $id_quote])->label(false) ?>

    <?= $form->field($model, 'id_service')->dropDownList(OptionComboForm::getArrayOptionsServices(),['prompt'=>Yii::t('app','Select')]) ?>

    <?= $form->field($model, 'estimate_hours')->textInput() ?>

    <?php 
    if(!$model->isNewRecord)
        echo $form->field($model, 'status')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::REGISTRY_STATUS),['prompt'=>Yii::t('app','Select')]); 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
