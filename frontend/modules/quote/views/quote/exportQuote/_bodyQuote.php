<?php
use yii\helpers\Html;

$arrayServices = backend\models\QuoteService::getListServices($model->id);

//VHT = (VBMA * 4) * 12 meses / 2000 horas
//VSB = (VH * EH)

$VHT = ($model->vbma * 4) * (12 / 2000);

?>

<h1>Cotización #<?= $model->id ?></h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Servicios</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($arrayServices as $services) {?>
        <tr>
            <td><?= $services['id_service'] ?></td>
            <td><?= $services['name'] ?></td>
            <td><?= '$'.str_replace(',','.',number_format(trim(($services['estimate_hours'] * $VHT)))) ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>

