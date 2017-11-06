<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use frontend\assets\QuoteServiceAsset;
QuoteServiceAsset::register($this);

use backend\models\Service;

?>

<div class="quote-service-index">

    <p>
        <?php 
        echo Html::button(Yii::t('app', 'Create Quote Service'), [
            'class' => 'btn btn-success btnOpenModal',
            'id_quote' => $id_quote,
            'value' => yii\helpers\Url::toRoute(['quote-service/create'])
        ]);
        ?>
    </p>

    <?= GridView::widget([
        'id'=>'gridWiewQuoteService',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_quote',
            //'id_user',
            'id_service',
            [
                'attribute'=>'id_service',
                'label'=>Yii::t('app','Service'),
                'format' => 'html',
                'value' => function ($model) {
                    return Service::getNameService($model->id_service);
                },
            ],
            //'activity',
            'estimate_hours',
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',null,
                        [
                            'class'=>'btnOpenModal',
                            'value' => yii\helpers\Url::to(['quote-service/view', 'id'=>$model->id]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',null,
                        [
                            'class'=>'btnOpenModal',
                            'id_quote' => $model->id_quote,
                            'value' => yii\helpers\Url::to(['quote-service/update', 'id'=>$model->id]),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>',null,
                        [
                            'class'=>'btnActionDelete',
                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                            'value' => yii\helpers\Url::to(['quote-service/delete', 'id'=>$model->id]),
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>
    

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
