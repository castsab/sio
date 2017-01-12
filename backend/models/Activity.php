<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property integer $id
 * @property integer $id_service
 * @property integer $code
 * @property string $name
 * @property string $description
 * @property integer $order
 * @property integer $state
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_service', 'code', 'name'], 'required'],
            [['id_service', 'code', 'order', 'state'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 200],
            [['id_service'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['id_service' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_service' => Yii::t('app', 'Id Service'),
            'code' => Yii::t('app', 'Code'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'order' => Yii::t('app', 'Order'),
            'state' => Yii::t('app', 'State'),
        ];
    }
}
