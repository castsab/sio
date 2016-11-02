<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Client */

$this->title = $model->document;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-view">

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
            'id_user',
            'type_client',
            'city_origin',
            'name_company',
            'address',
            'web_site',
            'fax',
            'pbx',
            'first_name',
            'last_name',
            'office_address',
            'email:email',
            'cell_phone',
            'local_phone',
            'extension',
            'contact_project',
            'contact_business',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

<?php 
echo $this->render('/client-contact/index', [
    'searchModel' => $modelSearchClientContact,
    'dataProvider' => $dataSearchClientContact,
    'document' => $model->document
]); 
?>
