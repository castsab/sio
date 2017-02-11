<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Person */

$this->title = Yii::t('app', 'Update Person') .':'. $model->document;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->document, 'url' => ['view', 'id' => $model->document]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
