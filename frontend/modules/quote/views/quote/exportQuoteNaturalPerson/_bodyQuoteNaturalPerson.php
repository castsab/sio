<?php

use yii\helpers\Html;
use backend\models\JHelper;
use backend\models\Client;

$jHelper = new JHelper();
$arrayServices = backend\models\QuoteService::getListServices($model->id);
$client = new Client();
$arrayClientData = $client->getClientDataArray($model->document);
$totalBaseValueServices = 0;
?>


<div class="quotation-labels">
    <label>Cotización para:<span><?= Client::getNameClient($model->document) ?></span></label>
    <ul>
        <li><?= $model->document ?></li>
        <li><?= $arrayClientData->address ?></li>
        <li><?= $arrayClientData->cell_phone ?></li>
        <li><?= $arrayClientData->name_company ?></li>
    </ul>
</div>
<label><span class="applicant-label"><?= Client::getNameClient($model->document) ?></span> agradeciendo su confianza le presentamos su cotización.</label>

<table class="contents-table-quotation">
    <thead>
        <tr>
            <th colspan="4">Lista de servicios</th>
        </tr>
        <tr>
            <td>ID Servicio</td>
            <td>Servicios</td>
            <td colspan="2">Valor Base</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arrayServices as $services) { ?>
        
        <?php
        $value_basis_service = $jHelper->getValueBasisServiceMoreCommission($services['value_basis_service']);
        ?>
            <tr>
                <td><?= $services['id_service'] ?></td>
                <td><?= $services['name'] ?></td>
                <td><?= '$' . $jHelper->getValueFormat($value_basis_service) ?></td>
            </tr>
        <?php 
            $totalBaseValueServices += $value_basis_service; 
        } 
        ?>
        
        <tr>
            <td></td>
            <td>Descuento(<?= (!empty($model->discount))?$model->discount:0 ?>%):</td>
            <td><?= (!empty($model->discount))?'- $' . $jHelper->getValueFormat($jHelper->getQuoteDiscount($totalBaseValueServices,$model->discount)):""; ?></td>
        </tr>
        
        <?php if($model->quote_iva == 1){ ?>
        <tr>
            <td></td>
            <td>IVA(19%):</td>
            <td><?= '$' . $jHelper->getValueFormat($jHelper->getIvaQuote($totalBaseValueServices)) ?></td>
        </tr>
        <?php }?>
            
        <tr>
            <td></td>
            <td>Valor Total:</td>
            <?php if($model->quote_iva == 0){ ?>
            <td><?= '$' . $jHelper->getValueFormat($jHelper->getValueQuoteWithDiscount($totalBaseValueServices,$model->discount)) ?></td>
            <?php }else{ ?>
            <td><?= '$' . $jHelper->getValueFormat((($jHelper->getValueQuoteWithIva($totalBaseValueServices) - $jHelper->getQuoteDiscount($totalBaseValueServices,$model->discount)))); ?></td>
            <?php } ?>
        </tr>
    </tbody>
</table>



















