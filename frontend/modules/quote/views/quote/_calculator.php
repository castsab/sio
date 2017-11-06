<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\QuoteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quote-calculator">

    <label>Horas estimadas</label>
    <input type="text" id="estimate_hours" name="estimate_hours" value="">
    <button id="btnCalculateWorkingHours"><span class="glyphicon glyphicon-usd"></span> Calcular</button>
    
    <div>
        <br>
        <table class="table table-bordered">
            <tr>
                <td>VBMA: </td>
                <td><label id="VBMA"></label></td>
            </tr>
            <tr>
                <td>Valor hora: </td>
                <td><label id="workingHours"></label></td>
            </tr>
            <tr>
                <td>Valor estimado: </td>
                <td><label style="color: red;font-size: 20px;" id="calculateEstimate"></label></td>
            </tr>
        </table>
    </div>
    
    <div style="margin-top: 20px; border: 1px solid #ccc;"></div>
    
</div>
