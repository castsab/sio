<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "option".
 *
 * @property integer $id
 * @property integer $id_combo
 * @property integer $code
 * @property string $name
 * @property string $description
 * @property integer $order
 * @property integer $state
 */
class Option extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_combo', 'code', 'name', 'order', 'state'], 'required'],
            [['id_combo', 'code', 'order', 'state'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['id_combo'], 'exist', 'skipOnError' => true, 'targetClass' => Combo::className(), 'targetAttribute' => ['id_combo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_combo' => Yii::t('app', 'Id Combo'),
            'code' => Yii::t('app', 'Code'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'order' => Yii::t('app', 'Order'),
            'state' => Yii::t('app', 'State'),
        ];
    }
    
    public function getListOptionCombo($id_combo){
        $array = $this->find()->where(['state'=>'1','id_combo'=>$id_combo])->orderBy('order ASC')->asArray()->all();
        return ArrayHelper::map($array,'code','name');
    }
}
