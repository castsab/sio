<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "quote".
 *
 * @property string $id
 * @property integer $id_user
 * @property string $document
 * @property integer $apply_discount
 * @property integer $discount
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $status_quote
 * @property integer $vbma   
 */
class Quote extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quote';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document', 'apply_discount'], 'required'],
            [['id', 'id_user', 'document', 'apply_discount', 'discount', 'status', 'created_at', 'updated_at','status_quote','vbma'], 'integer'],
            [['document'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['document' => 'document']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_user' => Yii::t('app', 'Id User'),
            'document' => Yii::t('app', 'Document'),
            'apply_discount' => Yii::t('app', 'Apply Discount'),
            'discount' => Yii::t('app', 'Discount'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    
    public function beforeSave($insert) {
        $time = time();
        if ($insert) {
            $this->created_at=$time;
            $this->updated_at=$time;
            $this->status=1;
            $this->id=$this->getConsecutiveQuote();
            $this->id_user = Yii::$app->user->identity->id;
            $this->status_quote = 1;
        } else {
            $this->updated_at=$time;
        }
        return parent::beforeSave($insert);
    }
    
    private function getConsecutiveQuote(){
        $result="";
        $model=  self::find()->limit('1')->orderBy('id DESC')->one();
        if ($model)
            $result= ($model->id + 1);
        else
            $result=1;
        
        return $result;
    }
}
