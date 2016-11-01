<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use frontend\models\OptionComboForm;
use backend\models\User;

$this->title = Yii::t('app', 'Services');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Service'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'id_user',
                'label'=>Yii::t('app','Username'),
                'format' => 'html',
                'value' => function ($model) {
                    return  "<p class='cell-normal-wrap'>".User::getNameUser($model->id_user)."</p>";
                },
            ],
            [
                'attribute' => 'id_line_business',
                'format' => 'raw',
                'value' => function($model){
                    return OptionComboForm::getValidateOptionArrayCombo($model->id_line_business, OptionComboForm::LINE_BUSINESS);
                } 
            ],
            'name',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model){
                    return OptionComboForm::getValidateOptionArrayCombo($model->status, OptionComboForm::REGISTRY_STATUS);
                } 
            ],
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
