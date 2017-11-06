<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use frontend\models\OptionComboForm;

$this->registerJs("
    
    $('#quote-document_person').attr('disabled', true);
    $('#quote-quote_iva').attr('disabled', true);
    
    $('.quote-person-natural').change(function(e){
        
        var quotePersonNatural = $('input:radio:checked').val();
        
        if(quotePersonNatural == 1){
            $('#quote-document_person').attr('disabled', false);
            $('#quote-quote_iva').attr('disabled', false);
        }else{
            $('#quote-document_person').attr('disabled', true);
            $('#quote-document_person').val('').change();
            
            $('#quote-quote_iva').attr('disabled', true);
            $('#quote-quote_iva').val(1);
        }

    });"
);

?>

<div id="message-contact"></div>

<div class="quote-form">
    
    <?php $form = ActiveForm::begin(['id'=>'quote-form']); ?>

    <?php
    if($model->isNewRecord){
        $model->quote_person_natural = 0; 
        $model->quote_iva = 1; 
    }
    
    echo $form->field($model, 'quote_person_natural')->radioList([0 => 'No',1 => 'Si'],['class'=>'quote-person-natural']);
    echo $form->field($model, 'quote_iva')->dropDownList(['0' => 'No','1' => 'Si']);
    ?>
    
    <?php 
        echo $form->field($model, 'document_person')->widget(Select2::classname(), [
            'options' => ['placeholder' => Yii::t('app','Select'),'multiple' => false],
            'language' => 'es',
            'data' => \backend\models\Person::getPersonArray(),
        ])->label(Yii::t('app','Person'));
    ?>
    
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
