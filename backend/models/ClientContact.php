<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client_contact".
 *
 * @property integer $id
 * @property string $document
 * @property integer $id_user
 * @property string $first_name
 * @property string $last_name
 * @property string $office_address
 * @property string $email
 * @property integer $cell_phone
 * @property integer $local_phone
 * @property integer $extension
 * @property integer $contact_project
 * @property integer $contact_business
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class ClientContact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document', 'first_name', 'last_name','email','status'], 'required'],
            [['document', 'id_user', 'cell_phone', 'local_phone', 'extension', 'contact_project', 'contact_business', 'status', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'office_address', 'email'], 'string', 'max' => 100],
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
            'document' => Yii::t('app', 'Document'),
            'id_user' => Yii::t('app', 'Id User'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'office_address' => Yii::t('app', 'Office Address'),
            'email' => Yii::t('app', 'Email'),
            'cell_phone' => Yii::t('app', 'Cell Phone'),
            'local_phone' => Yii::t('app', 'Local Phone'),
            'extension' => Yii::t('app', 'Extension'),
            'contact_project' => Yii::t('app', 'Contact Project'),
            'contact_business' => Yii::t('app', 'Contact Business'),
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
            $this->id_user = Yii::$app->user->identity->id;
        } else {
            $this->updated_at=$time;
        }
        return parent::beforeSave($insert);
    }
    
}
