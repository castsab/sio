<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "municipality".
 *
 * @property integer $id
 * @property integer $id_department
 * @property string $name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Municipality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_department', 'name', 'created_at', 'updated_at'], 'required'],
            [['id', 'id_department', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['id_department'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['id_department' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_department' => Yii::t('app', 'Id Department'),
            'name' => Yii::t('app', 'Name'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    
    public static function getListMunicipality() {
        $array = self::find()->select(['id','name'])->where(['status'=>1])->orderBy('name ASC')->all();
        return \yii\helpers\ArrayHelper::map($array, 'id', 'name');
        
    }
    
    public static function getNameMunicipality($id){
        $result="";
        $model=self::find()->where(['id'=>$id])->one();
        if ($model) {
            $result= $model->name;
        }
        return $result;
    }
}
