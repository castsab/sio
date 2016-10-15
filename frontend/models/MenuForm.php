<?php

namespace frontend\models;
use app\modules\admin\models\Menu;
use yii;

class MenuForm {

    public static function getMenu(){
        $parent=null;
        $arrayOptionsMenu = static::getMenuParent($parent);
        return static::setDeleteArrayParentThatNotChildren($arrayOptionsMenu);
    }

    public static function getMenuParent($parent){
        $arrayOptionsMenu = Menu::find()->where(['parent' => $parent])->orderBy('order')->asArray()->all();
        $arrayMenu = [];
        foreach ($arrayOptionsMenu as $optionsMenu) {
            if($parent==null){
                if(empty($optionsMenu['route'])){
                    $arrayMenu[]=static::getBuildArrayOptionMenu($optionsMenu);
                }else{
                    if(\Yii::$app->user->can('root') || \Yii::$app->user->can($optionsMenu['route']))
                        $arrayMenu[]=static::getBuildArrayOptionMenu($optionsMenu);
                }
            }else if(\Yii::$app->user->can('root') || \Yii::$app->user->can($optionsMenu['route'])){
                $arrayMenu[]=static::getBuildArrayOptionMenu($optionsMenu);
            }
        }
        return $arrayMenu;
    }

    private static function getBuildArrayOptionMenu($optionsMenu){
        return [
            'label' => Yii::t('app',$optionsMenu['name']),
            'url' => [$optionsMenu['route']],
            'items' => static::getMenuParent($optionsMenu['id']),
            'options'=> ['id'=>Yii::t('app',$optionsMenu['name'])],
        ];
    }

    private static function setDeleteArrayParentThatNotChildren($arrayOptionsMenu){
        foreach ($arrayOptionsMenu as $i => $arrayOption) {
            if(empty($arrayOption['items'])){
                if(!\Yii::$app->user->can('root')){
                    if(!empty($arrayOption['url'][0]))
                        unset($arrayOptionsMenu[$i]['items']);
                    else
                        unset($arrayOptionsMenu[$i]);
                }else{
                    if(!empty($arrayOption['url'][0]))
                        unset($arrayOptionsMenu[$i]['items']);
                }
            }
        }
        return $arrayOptionsMenu;
    }

}
