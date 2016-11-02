<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'type_document') ?>

    <?= $form->field($model, 'document') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'type_client') ?>

    <?= $form->field($model, 'city_origin') ?>

    <?php // echo $form->field($model, 'name_company') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'web_site') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'pbx') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'office_address') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'cell_phone') ?>

    <?php // echo $form->field($model, 'local_phone') ?>

    <?php // echo $form->field($model, 'extension') ?>

    <?php // echo $form->field($model, 'contact_project') ?>

    <?php // echo $form->field($model, 'contact_business') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
