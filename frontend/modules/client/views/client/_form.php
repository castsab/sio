<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\models\OptionComboForm;
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_document')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::TYPE_DOCUMENT),['prompt'=>Yii::t('app','Select')]) ?>

    <?= $form->field($model, 'document')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_client')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::TYPE_CLIENT),['id'=>'slcTypeClient','prompt'=>Yii::t('app','Select')]) ?>

    <?= $form->field($model, 'city_origin')->dropDownList(OptionComboForm::getArrayOptionsComboMunicipality(),['prompt'=>Yii::t('app','Select')]) ?>
    
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell_phone')->textInput() ?>

    <?= $form->field($model, 'local_phone')->textInput() ?>

    <?= $form->field($model, 'extension')->textInput() ?>
        
    <?= $form->field($model, 'name_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pbx')->textInput(['maxlength' => true]) ?>
        
    <?= $form->field($model, 'status')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::REGISTRY_STATUS),['prompt'=>Yii::t('app','Select')]) ?>
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
