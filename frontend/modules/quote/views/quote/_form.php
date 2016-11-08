<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use frontend\models\OptionComboForm;
?>

<div id="message-contact"></div>

<div class="quote-form">

    <?php $form = ActiveForm::begin(['id'=>'quote-form']); ?>

    <?php 
        echo $form->field($model, 'document')->widget(Select2::classname(), [
            'options' => ['placeholder' => Yii::t('app','Select'),'multiple' => false],
            'language' => 'es',
            'data' => \backend\models\Client::getClientArray(),
        ])->label(Yii::t('app','Client'));
    ?>

    <?= $form->field($model, 'apply_discount')->dropDownList(OptionComboForm::getArrayOptionsCombo(OptionComboForm::APPLY_DISCOUNT),['prompt'=>Yii::t('app','Select')]) ?>

    <?= $form->field($model, 'discount')->textInput(['maxlength'=>2]) ?>

    <?php 
    if(!$model->isNewRecord) 
        $form->field($model, 'status')->textInput(); 
    ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
