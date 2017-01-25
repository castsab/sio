<?php

use yii\helpers\Html;

$arrayServices = backend\models\QuoteService::getListServices($model->id);

//VHT = (VBMA * 4) * 12 meses / 2000 horas
//VSB = (VH * EH)

$VHT = ($model->vbma * 4) * (12 / 2000);
?>


<div class="quotation-labels">
    <label>Cotización para:<span>Jimi Hendrix</span></label>
    <ul>
        <li>jimihendrix@landinland.com</li>
        <li>031 2556203</li>
        <li>lady landiland S.A.S</li>
    </ul>
</div>
<label><span class="applicant-label">Jimi Hendrix</span> agradeciendo su confianza le presentamos su cotización.</label>

<table class="contents-table-quotation">
    <thead>
        <tr>
            <th colspan="4">Página Web Ladyland</th>
        </tr>
        <tr>
            <td>Cantidad</td>
            <td>Servicios</td>
            <td>Actividades</td>
            <td>Valor Base</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arrayServices as $services) { ?>
            <tr>
                <td><?= $services['id_service'] ?></td>
                <td><?= $services['name'] ?></td>
                <td><?= $services['activity'] ?></td>
                <td><?= '$' . str_replace(',', '.', number_format(trim(($services['estimate_hours'] * $VHT)))) ?></td>
            </tr>
        <?php } ?>

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



















