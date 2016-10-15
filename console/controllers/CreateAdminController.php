<?php

namespace console\controllers;

use yii\console\Controller;
use frontend\models\SignupForm;
use Yii;
use common\models\User;
use yii\rbac\DbManager;

class CreateAdminController extends Controller
{
    public function actionIndex(){
        if(\Yii::$app->params['emailAdmin'] && \Yii::$app->params['roleAdmin']){
            $this->createdUser();
        }else{
           echo 'Set the variable email and role.'; 
        }
    }
    
    private function createdUser(){
        
        $user = User::find()->where(['email'=>\Yii::$app->params['emailAdmin']])->one();
        
        $objUser = new User();
        $password = (!empty(\Yii::$app->params['passwordAdmin']))?\Yii::$app->params['passwordAdmin']:$this->getRandomPassword();
        
        if($user){
            echo 'This '.\Yii::$app->params['roleAdmin'].' with mail ( '.\Yii::$app->params['emailAdmin'].' ) user was already created.';
        }else{
            $model = new SignupForm(['username' => \Yii::$app->params['emailAdmin'],'email' => \Yii::$app->params['emailAdmin'],'password' => $password]);
            $user = $model->signup();
            $user->status = '1';
            $user->save();
            $this->roleAssociatedUser($user->id);
            echo 'user '.\Yii::$app->params['roleAdmin'].' successfully created.';
        }
    }
    
    private function getRandomPassword(){
        return Yii::$app->security->generateRandomString();
    }
    
    private function roleAssociatedUser($id_user){
        $auth = new DbManager();
        $auth->init();
        $role = $auth->createRole(\Yii::$app->params['roleAdmin']);
        $auth->assign($role, $id_user);
    }
}
