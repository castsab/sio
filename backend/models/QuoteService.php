<?php

namespace backend\models;
use backend\models\Quote;

use Yii;

/**
 * This is the model class for table "quote_service".
 *
 * @property string $id
 * @property string $id_quote
 * @property integer $id_user
 * @property integer $id_service
 * @property integer $estimate_hours
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $activity
 * @property string $value_basis_service
 */
class QuoteService extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quote_service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_service', 'estimate_hours'], 'required'],
            [['id_quote', 'id_user', 'id_service', 'estimate_hours', 'status', 'created_at', 'updated_at'], 'integer'],
            [['id_quote'], 'exist', 'skipOnError' => true, 'targetClass' => Quote::className(), 'targetAttribute' => ['id_quote' => 'id']],
            [['id_service'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['id_service' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['value_basis_service'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_quote' => Yii::t('app', 'Id Quote'),
            'id_user' => Yii::t('app', 'Id User'),
            'id_service' => Yii::t('app', 'Id Service'),
            'estimate_hours' => Yii::t('app', 'Estimate Hours'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'activity' => Yii::t('app', 'Activity'),
            'value_basis_service' => Yii::t('app', 'Value Basis Service'),
        ];
    }
    
    public function beforeSave($insert) {
        $time = time();
        
        $valueHour = $this->getValueWorkingHour($this->id_quote);
        
        if ($insert) {
            $this->created_at=$time;
            $this->updated_at=$time;
            $this->status=1;
            $this->id_user = Yii::$app->user->identity->id;
            if(!empty($this->activity))
                $arrayActivitys = implode(";", $this->activity);
            else
                $arrayActivitys = "";
            
            $this->activity = $arrayActivitys;
            $this->value_basis_service = ($valueHour * $this->estimate_hours);
        } else {
            $this->updated_at=$time;
            if(!empty($this->activity))
                $arrayActivitys = implode(";", $this->activity);
            else
                $arrayActivitys = "";
            
            $this->activity = $arrayActivitys;
            $this->value_basis_service = $this->value_basis_service;
        }
        return parent::beforeSave($insert);
    }
    
    public static function getNumberServices($id_quote){
        $totalServices = 0;
        $totalServices = self::find()->where(['id_quote'=>$id_quote])->count('*');
        return $totalServices;
    }
    
    public static function getListServices($id_quote){
        return self::find()->select('*')->where(['quote_service.status'=>1,'id_quote'=>$id_quote])->innerJoin('service','service.id=quote_service.id_service')->asArray()->all();
    }
    
    public function getValueWorkingHour($id_quote){
        $quote = Quote::find()->where(['id'=>$id_quote])->one();
        return (($quote->vbma * 5) * 12 / 2000);
    }
}
