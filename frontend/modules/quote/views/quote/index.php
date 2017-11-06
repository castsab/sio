<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use frontend\assets\QuoteAsset;
QuoteAsset::register($this);

$this->title = Yii::t('app', 'Quotes');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('_calculator'); ?>

<div class="quote-index ">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button(Yii::t('app', 'Create Quote'), [
            'class' => 'btn btn-success btnOpenModal',
            'value' => yii\helpers\Url::toRoute(['quote/create'])
        ]);?>
    </p>

    
    <?= GridView::widget([
        'id'=>'gridWiewQuote',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'document',
            'status',
            
            [
                'attribute' => 'created_at',
                'format' => 'raw',
                'value'=>function ($model) {
                    return backend\models\JHelper::getDateFormatAudit($model->created_at);
                },
            ],    
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete} {print}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-briefcase"></span>',yii\helpers\Url::to(['quote/view', 'id'=>$model->id]));
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',null,
                        [
                            'class'=>'btnOpenModal',
                            'id_quote' => $model->id,
                            'value' => yii\helpers\Url::to(['quote/update', 'id'=>$model->id])
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>',null,
                        [
                            'class'=>'btnActionDelete',
                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                            'value' => yii\helpers\Url::to(['quote/delete', 'id'=>$model->id]),
                        ]);
                    },
                    'print' => function ($url, $model) {
                        if(\backend\models\QuoteService::getNumberServices($model->id) != 0){
                            
                            $action = ($model->quote_person_natural == 1)?'quote/export-quote-natural-person':'quote/export-quote';
                            
                            return Html::a('<span class="glyphicon glyphicon-print"></span>', yii\helpers\Url::to([$action, 'id'=>$model->id]), 
                            [
                                'title' => Yii::t('app', 'Print quote'),
                                'style' => 'cursor:pointer;',
                                'target'=>'_blank',
                            ]);
                        }
                    },
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
