<?php

namespace backend\models;

use Yii;

/** 
 * This is the model class for table "quote". 
 * 
 * @property string $id
 * @property int $id_user
 * @property string $document
 * @property int $discount
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $apply_discount
 * @property int $status_quote
 * @property int $vbma
 * @property string $document_person
 * @property int $quote_person_natural
 * 
 * @property Client $document0
 * @property User $user
 * @property QuoteService[] $quoteServices
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
            [['id', 'id_user', 'document', 'discount', 'status', 'created_at', 'updated_at', 'apply_discount', 'status_quote', 'vbma', 'document_person', 'quote_person_natural'], 'integer'],
            [['document'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['document' => 'document']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']]
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
            'discount' => Yii::t('app', 'Discount'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'apply_discount' => Yii::t('app', 'Apply Discount'),
            'status_quote' => Yii::t('app', 'Status Quote'),
            'vbma' => Yii::t('app', 'Vbma'),
            'document_person' => Yii::t('app', 'Document Person'),
            'quote_person_natural' => Yii::t('app', 'Quote Person Natural'),
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
            $this->vbma = Yii::$app->params['VBMA'];
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
    
    public function beforeDelete(){
        if (parent::beforeDelete()) {
            $this->deleteRelationships();
            return true;
        } else {
            return false;
        }
    }

    private function deleteRelationships()
    {
        $this->deleteQuoteService();
    }

    private function deleteQuoteService()
    {
        $arrayQuoteService = QuoteService::findAll([
            'id_quote' => $this->id,
        ]);

        foreach ($arrayQuoteService as $quoteServicervice) {
            $quoteServicervice->delete();
        }
    }
    
}
