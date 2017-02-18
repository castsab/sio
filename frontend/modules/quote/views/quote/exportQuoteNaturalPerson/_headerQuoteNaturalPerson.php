<?php

use yii\helpers\Html;
use backend\models\JHelper;
use backend\models\Person;

$jHelper = new JHelper();
$person = new Person();
$arrayDataPeron = $person->getPersonDataArray($model->document_person);
?>

<div class="row">

    <!--<div class="header-logo-img">
        <img src="<?php //echo Yii::$app->request->baseUrl . '/images/logo.png'; ?>">
    </div>-->

    <div class="info-quotation">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Cotización</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No. de cotización</td>
                        <td class="quote-data"><?= $model->id ?></td>
                    </tr>
                    <tr>
                        <td>Fecha</td>
                        <td class="quote-data"><?= $jHelper->getDateFormat($model->created_at) ?></td>
                    </tr>
                    <tr>
                        <td>Cedula</td>
                        <td class="quote-data"><?= $model->document_person ?></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td class="quote-data"><?= $arrayDataPeron->first_name . ' ' . $arrayDataPeron->last_name ?></td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td class="quote-data"><?= $arrayDataPeron->email ?></td>
                    </tr>
                    <tr class="quote-last-child">
                        <td>Teléfono</td>
                        <td class="quote-data"><?= $arrayDataPeron->phone ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>