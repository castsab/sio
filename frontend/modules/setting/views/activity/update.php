<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Activity */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Activity',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Activities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id_service' => $_POST['id_service']
    ]) ?>

</div>
