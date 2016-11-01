<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use frontend\assets\OptionAsset;
OptionAsset::register($this);

$this->title = Yii::t('app', 'Options');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="option-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        echo Html::button(Yii::t('app', 'Create Option'), [
            'class' => 'btn btn-success btnOpenModal',
            'id_combo' => $id_combo,
            'value' => yii\helpers\Url::toRoute(['option/create'])
        ]);
        ?>
    </p>
    
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'id'=>'gridWiewOption',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id_combo',
            'code',
            'name',
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-eye-open"></span> '.Yii::t('app','View'),
                        [
                            'class'=>'btn btn-xs btnOpenModal',
                            'value' => yii\helpers\Url::to(['option/view', 'id'=>$model->id]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-pencil"></span> '.Yii::t('app','Update'),
                        [
                            'class'=>'btn btn-xs btnOpenModal',
                            'id_combo' => $model->id_combo,
                            'value' => yii\helpers\Url::to(['option/update', 'id'=>$model->id]),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::button('<span class="glyphicon glyphicon-trash"></span> '.Yii::t('app','Delete'),
                        [
                            'class'=>'btn btn-xs btnActionDelete',
                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                            'value' => yii\helpers\Url::to(['option/delete', 'id'=>$model->id]),
                        ]);
                    }
                ],
            ],
        ],
    ]);
    ?>
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





