<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Quote */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Quotes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quote-view">

    <h1><?= Html::encode(Yii::t('app','Quote').'#'.$this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_user',
            'document',
            'apply_discount',
            'discount',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

<?php 
echo $this->render('/quote-service/index', [
    'searchModel' => $modelSearchQuoteService,
    'dataProvider' => $dataSearchQuoteService,
    'id_quote' => $model->id
]); 
?>
