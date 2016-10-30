<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use frontend\models\OptionComboForm;

$this->title = Yii::t('app', 'Combos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Combo'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            'id',
            'name',
            'description',
            [
                'attribute' => 'state',
                'format' => 'raw',
                'value' => function($model){
                    return OptionComboForm::getValidateOptionArrayCombo($model->state, OptionComboForm::REGISTRY_STATUS);
                } 
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
