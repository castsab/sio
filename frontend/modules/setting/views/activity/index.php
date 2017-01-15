<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use frontend\assets\ActivityAsset;
ActivityAsset::register($this);

$this->title = Yii::t('app', 'Activities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        echo Html::button(Yii::t('app', 'Create Activity'), [
            'class' => 'btn btn-success btnOpenModal',
            'id_service' => $id_service,
            'value' => yii\helpers\Url::toRoute(['activity/create'])
        ]);
        ?>
    </p>

    <?= GridView::widget([
        'id'=>'gridWiewActivity',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_service',
            'code',
            'name',
            //'description:ntext',
            // 'order',
            // 'state',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-eye-open"></span> '.Yii::t('app','View'),
                        [
                            'class'=>'btn btn-xs btnOpenModal',
                            'value' => yii\helpers\Url::to(['activity/view', 'id'=>$model->id]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-pencil"></span> '.Yii::t('app','Update'),
                        [
                            'class'=>'btn btn-xs btnOpenModal',
                            'id_service' => $model->id_service,
                            'value' => yii\helpers\Url::to(['activity/update', 'id'=>$model->id]),
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body"></div>
        </div>
    </div>
</div>
