<?php
use yii\helpers\Html;
use backend\models\JHelper;

$jHelper = new JHelper();
?>

<div class="row">
  <div class="header-logo-img">
    <img src="<?php echo Yii::$app->request->baseUrl.'/images/logo.png';?>">
  </div>
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
                <td>Nit</td>
                <td class="quote-data">xxxxxxxx</td>
            </tr>
            <tr>
                <td>Razón Social</td>
                <td class="quote-data">DIÁgiles</td>
            </tr>
            <tr>
                <td>Correo</td>
                <td class="quote-data">xxxxx@xxxx.com</td>
            </tr>
            <tr class="quote-last-child">
                <td>Teléfono</td>
                <td class="quote-data">xxxxxxxxxx</td>
            </tr>
          </tbody>
      </table>
    </div>
  </div>
</div>