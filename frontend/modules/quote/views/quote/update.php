<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Quote */

$this->title = Yii::t('app', 'Update Quote') .':'. $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Quotes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="quote-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
