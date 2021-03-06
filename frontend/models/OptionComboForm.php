<?php
namespace frontend\models;

use yii;
use yii\base\Model;
use backend\models\Option;
use backend\models\Municipality;
use backend\models\Service;

class OptionComboForm extends Model
{
    const REGISTRY_STATUS = 1;
    const LINE_BUSINESS = 2;
    const TYPE_DOCUMENT = 3;
    const TYPE_CLIENT = 4;
    const APPLY_DISCOUNT = 5;

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
    
    public static function getArrayOptionsComboMunicipality(){
        return Municipality::getListMunicipality();
    }
    
    public static function getArrayOptionsServices(){
        return Service::getListServices();
    }

}

?>
