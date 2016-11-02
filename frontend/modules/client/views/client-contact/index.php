<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use frontend\assets\ClientContactAsset;
ClientContactAsset::register($this);

$this->title = Yii::t('app', 'Client Contacts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button(Yii::t('app', 'Create Client Contact'), [
                'class' => 'btn btn-success btnOpenModal',
                'document' => $document,
                'value' => yii\helpers\Url::toRoute(['client-contact/create'])
            ]); 
        ?>
    </p>

   
    <?= GridView::widget([
        'id'=>'gridWiewClientContact',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'document',
            'id_user',
            'first_name',
            'last_name',
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-eye-open"></span> '.Yii::t('app','View'),
                        [
                            'class'=>'btn btn-xs btnOpenModal',
                            'value' => yii\helpers\Url::to(['client-contact/view', 'id'=>$model->id]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-pencil"></span> '.Yii::t('app','Update'),
                        [
                            'class'=>'btn btn-xs btnOpenModal',
                            'document' => $model->document,
                            'value' => yii\helpers\Url::to(['client-contact/update', 'id'=>$model->id]),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-trash"></span> '.Yii::t('app','Delete'),
                        [
                            'class'=>'btn btn-xs btnActionDelete',
                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                            'value' => yii\helpers\Url::to(['client-contact/delete', 'id'=>$model->id]),
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
