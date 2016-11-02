<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\models\OptionComboForm;

if($model->isNewRecord){
    $model->contact_project = 0;
    $model->contact_business = 0;
}
?>

<div id="message-contact"></div>

<div class="client-contact-form">

    <?php $form = ActiveForm::begin(['id'=>'client-contact-form']); ?>

    <?= $form->field($model, 'document')->hiddenInput(['value' => $document])->label(false) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell_phone')->textInput() ?>

    <?= $form->field($model, 'local_phone')->textInput() ?>

    <?= $form->field($model, 'extension')->textInput() ?>

    <?= $form->field($model, 'contact_project')->radioList([0 =>'No',1=>'Si']) ?>

    <?= $form->field($model, 'contact_business')->radioList([0 =>'No',1=>'Si']) ?>

    <?= $form->field($model, 'status')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::REGISTRY_STATUS),['prompt'=>'Select']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
