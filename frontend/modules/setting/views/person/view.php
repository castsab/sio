<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Person */

$this->title = $model->document;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->document], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->document], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'type_document',
            'document',
            'first_name',
            'last_name',
            'email:email',
            'phone',
            [
                'attribute' => 'quote_person_natural',
                'value'=> backend\models\JHelper::getValueTextQuotePersonNatural($model->quote_person_natural)
            ],
            [
                'attribute' => 'active_user',
                'value'=> ($model->active_user == 1)?'Si':'No'
            ],
            [
                'attribute' => 'status',
                'value'=> backend\models\JHelper::getValueTextStatus($model->status)
            ],
        
            [
                'attribute' => 'created_at',
                'value'=> backend\models\JHelper::getDateFormatAudit($model->created_at)
            ],
            [
                'attribute' => 'updated_at',
                'value'=> backend\models\JHelper::getDateFormatAudit($model->updated_at)
            ],
        ],
    ]) ?>

</div>
