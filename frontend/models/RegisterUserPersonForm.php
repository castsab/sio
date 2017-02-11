<?php
namespace frontend\models;

use yii\base\Model;
use backend\models\Person;
use common\models\User;

use Yii;

class RegisterUserPersonForm extends Model
{
    public $email;
    public $password;
    public $confirm_password;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password','confirm_password'], 'required'],
            [['confirm_password'], 'compare', 'compareAttribute' => 'password'],
            [['email'], 'string', 'max' => 100],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'password' => Yii::t('app', 'Password'),
            'confirm_password' => Yii::t('app', 'Confirm password'),
            'email' => Yii::t('app', 'Email')
        ];
    }
    
    public function setRegisterUserPerson(){
        $user = new User();
        $user->username = $this->email;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
    
    public function setUpdateActiveStateUserPerson($document){
        $person = Person::find()->where("document=$document")->one();
        if($person){
            $person->active_user = 1;
            $person->save();
        }
    }
    
    public function setUpdateDocumentUser($username,$document){
        $user = User::find()->where(['username'=>$username])->one();
        if($user){
            $user->document = $document;
            $user->save();
        }
    }
}
