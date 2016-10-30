<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\OptionComboForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Combo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Combos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            'description',
            [
                'attribute' => 'state',
                'value' => OptionComboForm::getValidateOptionArrayCombo($model->state, OptionComboForm::REGISTRY_STATUS),
            ],
        ],
    ]) ?>

</div>

<?php 
echo $this->render('/option/index', [
    'searchModel' => $modelSearchOption,
    'dataProvider' => $dataSearchOption,
    'id_combo' => $model->id
]); 
?>
