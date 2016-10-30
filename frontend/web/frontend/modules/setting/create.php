<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Combo */

$this->title = Yii::t('app', 'Create Combo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Combos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
