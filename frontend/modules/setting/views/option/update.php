<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Option */

$this->title = Yii::t('app', 'Update option');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="option-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id_combo' => $_POST['id_combo'],
    ]) ?>

</div>
