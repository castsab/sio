<?php
use yii\helpers\Html;

$arrayServices = backend\models\QuoteService::getListServices($model->id);

//VHT = (VBMA * 4) * 12 meses / 2000 horas
//VSB = (VH * EH)

$VHT = ($model->vbma * 4) * (12 / 2000);

?>


<table border="1" width="80%&" align="center">
    <thead>
        <tr>
            <th>COTIZACIÓN</th>
            <th><?= $model->id ?></th>
            <th>Fecha: </th>
        </tr>
    </thead>
</table>

<br>

<table border="1" width="80%&" align="center">
    <thead>
        <tr>
            <th width="50%">LOGO</th>
            <th width="50%">Nit: xxxxx<br>
            Razón social: DIÁgiles<br>
            Correo: xxxx@xxx.xx<br>
            Teléfono: xxxxxxxx</th>
        </tr>
    </thead>
</table>

<br>

<table border="0" width="80%" align="center">
    <thead>
        <tr>
            <th>XXXXXXXXXXXXXX agradeciendo su confianza le presentamos su cotización</th>
        </tr>
    </thead>
</table>

<br>

<table border="1" width="80%&" align="center">
    <thead>
        <tr>
            <th>Cantidad</th>
            <th>Servicios</th>
            <th>Actividades</th>
            <th>Valor Base</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($arrayServices as $services) {?>
        <tr>
            <td><?= $services['id_service'] ?></td>
            <td><?= $services['name'] ?></td>
            <td><?= $services['activity'] ?></td>
            <td><?= '$'.str_replace(',','.',number_format(trim(($services['estimate_hours'] * $VHT)))) ?></td>
        </tr>
    <?php }?>
        <tr>
            <td></td>
            <td></td>
            <td>IVA:</td>
            <td>$$$$</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Descuento:</td>
            <td>$$$$</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Valor Total:</td>
            <td>$$$$</td>
        </tr>
    </tbody>
</table>

