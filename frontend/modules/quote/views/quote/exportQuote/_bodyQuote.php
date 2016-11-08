<?php
use yii\helpers\Html;

$arrayServices = backend\models\QuoteService::getListServices($model->id);

print_r($arrayServices);

?>

<h1>Cotización #<?= $model->id ?></h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Servicios</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($arrayServices as $services) {?>
        <tr>
            <td><?= $services['id_service'] ?></td>
            <td><?= $services['name'] ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>