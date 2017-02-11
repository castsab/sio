<?php
namespace frontend\models;

use yii\base\Model;
use backend\models\Person;

use Yii;

class ValidatePersonForm extends Model
{
    public $document;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document'], 'required']
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'document' => Yii::t('app', 'Document')
        ];
    }
    
    public function findPerson(){
        $array="";
        if (!empty($this->document)) {
            $arrayPilo=Person::find()->where(['document'=>$this->document,'active_user'=>0])->one();
            if ($arrayPilo) {
                $array=$arrayPilo;
            }
        }
        return $array;
    }
}
