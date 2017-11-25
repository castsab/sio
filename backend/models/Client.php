<?php

namespace backend\models; 

use Yii; 

/** 
 * This is the model class for table "client". 
 * 
 * @property integer $type_document
 * @property string $document
 * @property integer $id_user
 * @property integer $type_client
 * @property string $city_origin
 * @property string $name_company
 * @property string $address
 * @property string $web_site
 * @property string $fax
 * @property string $pbx
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $first_name
 * @property string $last_name
 * @property string $office_address
 * @property string $email
 * @property integer $cell_phone
 * @property integer $local_phone
 * @property integer $extension
 * @property integer $contact_project
 * @property integer $contact_business
 */ 
class Client extends \yii\db\ActiveRecord
{ 
    public $fullname;
    
    public static function tableName() 
    { 
        return 'client'; 
    } 

    /** 
     * @inheritdoc 
     */ 
    public function rules() 
    { 
        return [
            [['type_document', 'document', 'type_client', 'city_origin','status'], 'required'],
            [['type_document', 'document', 'id_user', 'type_client', 'status', 'created_at', 'updated_at', 'local_phone', 'extension', 'contact_project', 'contact_business'], 'integer'],
            [['city_origin', 'fax', 'pbx'], 'string', 'max' => 50],
            [['name_company'], 'string', 'max' => 200],
            [['address', 'web_site', 'first_name', 'last_name', 'office_address', 'email','cell_phone'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            ['type_client', 'validateFields'],
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
            'id_user' => Yii::t('app', 'Id User'),
            'type_client' => Yii::t('app', 'Type Client'),
            'city_origin' => Yii::t('app', 'City Origin'),
            'name_company' => Yii::t('app', 'Name Company'),
            'address' => Yii::t('app', 'Address'),
            'web_site' => Yii::t('app', 'Web Site'),
            'fax' => Yii::t('app', 'Fax'),
            'pbx' => Yii::t('app', 'Pbx'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'office_address' => Yii::t('app', 'Office Address'),
            'email' => Yii::t('app', 'Email'),
            'cell_phone' => Yii::t('app', 'Cell Phone'),
            'local_phone' => Yii::t('app', 'Local Phone'),
            'extension' => Yii::t('app', 'Extension'),
            'contact_project' => Yii::t('app', 'Contact Project'),
            'contact_business' => Yii::t('app', 'Contact Business'),
        ]; 
    }
    
    public function beforeSave($insert) {
        $time = time();
        if ($insert) {
            $this->created_at=$time;
            $this->updated_at=$time;
            $this->id_user = Yii::$app->user->identity->id;
        } else {
            $this->updated_at=$time;
        }
        return parent::beforeSave($insert);
    }
    
    public function validateFields($attribute, $params)
    {
        if (in_array($this->$attribute, ['2', '3'])) {
            $this->addError('name_company', Yii::t('app','Company name can not be empty'));
        }else{
            if(empty($this->first_name) || empty($this->last_name)){
                $this->addError('first_name', Yii::t('app','Name cannot be empty'));
                $this->addError('last_name', Yii::t('app','Last name cannot be empty'));
            }else{
                if(empty($this->cell_phone) && empty($this->local_phone)){
                    $this->addError('cell_phone', Yii::t('app','Cell phone cannot be empty'));
                    $this->addError('local_phone', Yii::t('app','Local phone name cannot be empty'));
                }
            }    
        }
    }
    
    public static function getClientArray(){
        return \yii\helpers\ArrayHelper::map(self::find()->select([
            "document", 
            "CASE WHEN type_client = 1 THEN CONCAT(document,' - ',first_name,' ', last_name) ELSE CONCAT(document,' - ',name_company) END as fullname"
        ])->where(['status'=>1])->all(), 'document', 'fullname');
    }
    
    public static function getNameClient($document){
        $result="";
        $model= self::find()->where(['document'=>$document])->one();
        if ($model) {
            $result= $model->first_name.' '.$model->last_name;
        }
        return $result;
    }
    
    public function getClientDataArray($document){
        $result="";
        $model= self::find()->where(['document'=>$document])->one();
        if ($model) {
            $result= $model;
        }
        return $result; 
    }
} 

