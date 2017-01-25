<?php
use yii\helpers\Html;
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
                <td class="quote-data">101</td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td class="quote-data">10/12/12</td>
            </tr>
            <tr>
                <td>Nit</td>
                <td class="quote-data">123-123123</td>
            </tr>
            <tr>
                <td>Razón Social</td>
                <td class="quote-data">DIAgiles</td>
            </tr>
            <tr>
                <td>Correo</td>
                <td class="quote-data">usuarios@diagiles.com</td>
            </tr>
            <tr class="quote-last-child">
                <td>Teléfono</td>
                <td class="quote-data">3174765267</td>
            </tr>
          </tbody>
      </table>
    </div>
  </div>
</div>