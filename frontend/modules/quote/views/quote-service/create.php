<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\QuoteService */

$this->title = Yii::t('app', 'Create Quote Service');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Quote Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quote-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id_quote' => $_POST['id_quote']
    ]) ?>

</div>
