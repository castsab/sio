<?php

namespace frontend\models;

use yii;

class ControlAccessForm {

    public static function getControlAccess($route,$allowaction=null) {
        $arrayRouter = explode("/", $route);
        $action = array_pop($arrayRouter);
        $allow = ($allowaction == null)?false:true;
        
        if (!\Yii::$app->user->can('root')) 
            return [['allow' => true, 'roles' => ['/' . $route], 'actions' => [$action]],['allow' => $allow, 'actions' => $allowaction]];
        else    
            return [['allow' => true]];
    }

}
