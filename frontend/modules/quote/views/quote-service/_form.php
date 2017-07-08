<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\models\OptionComboForm;
use kartik\select2\Select2;
use yii\helpers\Url;
use yii\web\View;
use yii\helpers\Json;

 $select2Options = [
    //'multiple' => false,
    'theme' => 'krajee',
    'placeholder' => 'Type to autocomplete',
    'language' => 'en-US',
    'width' => '100%',
];

?>

<input type="hidden" value="<?= Url::to(['/setting/activity/list-activities'])?>" id="url">

<div class="quote-service-form">

    <?php $form = ActiveForm::begin(['id'=>'quote-service-form']); ?>

    <?= $form->field($model, 'id_quote')->hiddenInput(['value' => $id_quote])->label(false) ?>

    <?php 
    if(!$model->isNewRecord){
        $form->field($model, 'id_service')->hiddenInput(['value' => $model->id_service])->label(false);
        ?><label><?php echo backend\models\Service::getNameService($model->id_service);?></label><?php
    }else{
        echo $form->field($model, 'id_service')->widget(Select2::className(), [
            'model' => $model,
            'attribute' => 'id_service',
            'data' => OptionComboForm::getArrayOptionsServices(),
            'options' => $select2Options,
            'pluginEvents' => [
                'select2:select' => 'function(e) { listActivitiesOfService(e.params.data.id); }',
            ],
        ]);
        }
    ?>
     
    <?php
    $data = [];
    if(!$model->isNewRecord){
        $model->activity = explode(';', $model->activity);
        $data = backend\models\Activity::getListActivitiesOfService($model->id_service);
    }
    
    echo $form->field($model, 'activity')->widget(Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Select a activity ...', 'multiple' => true],
        'pluginOptions' => [
            'tags' => true,
            'tokenSeparators' => [';', ' '],
            'maximumInputLength' => 20
        ],
    ]);
    ?>
    
    <?= $form->field($model, 'estimate_hours')->textInput() ?>
    
    <?php 
    if(!$model->isNewRecord)
        echo $form->field($model, 'value_basis_service')->textInput();
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


<?php ob_start(); // output buffer the javascript to register later ?>
<script>
    function listActivitiesOfService(id_service) {
        var url = '<?= Url::to(['/setting/activity/list-activities', 'id' => '-id-']) ?>';
        var $select = $('#quoteservice-activity');
        $select.find('option').remove().end();
        $.ajax({
            url: url.replace('-id-', id_service),
            success: function (data) {
                var select2Options = <?= Json::encode($select2Options) ?>;
                select2Options.data = data.data;
                $select.select2(select2Options);
                $select.val(data.selected).trigger('change');
            }
        });
    }
</script>
<?php $this->registerJs(str_replace(['<script>', '</script>'], '', ob_get_clean()), View::POS_END); ?>


