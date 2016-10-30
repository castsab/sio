<?php
namespace frontend\models;

use yii;
use yii\base\Model;
use backend\models\Option;

class OptionComboForm extends Model
{
    const REGISTRY_STATUS = 1;
    
    public static function getArrayOptionsCombo($codeCombo, $arrayIndexNotShowOption=''){
        $option = new Option();
        $arrayOptions = $option->getListOptionCombo($codeCombo);
        if(!empty($arrayIndexNotShowOption)){
           foreach ($arrayIndexNotShowOption as $index) {
               unset($arrayOptions[$index]);
            }
        }
        return $arrayOptions;
    }

    public static function getValidateOptionArrayCombo($id,$codeCombo,$codeOptionDefaultCombo=''){
        $arrayOptions = OptionComboForm::getArrayOptionsCombo($codeCombo);
        if(isset($arrayOptions[$id])){
            return $arrayOptions[$id];
        }else{
            if(!empty($codeOptionDefaultCombo))
                return $arrayOptions[$codeOptionDefaultCombo];
            else
                return yii::t("app","Not assigned");
        }
    }

}

?>
