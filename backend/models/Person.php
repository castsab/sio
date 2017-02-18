<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $type_document
 * @property string $document
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property int $quote_person_natural
 * @property int $active_user
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Person extends \yii\db\ActiveRecord
{
    public $fullname;
    
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_document', 'document'], 'required'],
            [['type_document', 'document', 'quote_person_natural', 'active_user', 'status', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_document' => Yii::t('app', 'Type Document'),
            'document' => Yii::t('app', 'Document'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'quote_person_natural' => Yii::t('app', 'Quote Person Natural'),
            'active_user' => Yii::t('app', 'Active User'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    
    public function beforeSave($insert) {
        $time = time();
        if ($insert) {
            $this->created_at=$time;
        } else {
            $this->updated_at=$time;
        }
        return parent::beforeSave($insert);
    }
    
    public static function getPersonArray(){
        return \yii\helpers\ArrayHelper::map(self::find()->select([
            "document", 
            "CONCAT(document,' - ',first_name,' ', last_name) as fullname"
        ])->where(['status'=>1,'quote_person_natural'=>1])->all(), 'document', 'fullname');
    }
    
    public function getPersonDataArray($document){
        $result="";
        $model= self::find()->where(['document'=>$document])->one();
        if ($model) {
            $result= $model;
        }
        return $result; 
    }
}
