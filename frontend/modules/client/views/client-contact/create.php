<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClientContact */

$this->title = Yii::t('app', 'Create Client Contact');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Client Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'document' => $_POST['document']
    ]) ?>

</div>
