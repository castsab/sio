<?php

namespace console\controllers;

use yii\console\Controller;
use frontend\models\SignupForm;
use Yii;
use common\models\User;
use yii\rbac\DbManager;

class CreateRootController extends Controller
{
    public function actionIndex(){
        if(\Yii::$app->params['emailRoot'] && \Yii::$app->params['roleRoot']){
            $this->createdUser();
        }else{
           echo 'Set the variable email and role.'; 
        }
    }
    
    private function createdUser(){
        
        $user = User::find()->where(['email'=>\Yii::$app->params['emailRoot']])->one();
        
        $objUser = new User();
        $password = (\Yii::$app->params['passwordRoot'])?\Yii::$app->params['passwordRoot']:$this->getRandomPassword();
        
        if($user){
            echo 'This '.\Yii::$app->params['roleRoot'].' with mail ( '.\Yii::$app->params['emailRoot'].' ) user was already created.';
        }else{
            $model = new SignupForm(['username' => \Yii::$app->params['emailRoot'],'email' => \Yii::$app->params['emailRoot'],'password' => $password]);
            $user = $model->signup();
            $user->status = '1';
            $user->save();
            $this->roleAssociatedUser($user->id);
            echo 'user '.\Yii::$app->params['roleRoot'].' successfully created.';
        }
    }
    
    private function getRandomPassword(){
        return Yii::$app->security->generateRandomString();
    }
    
    private function roleAssociatedUser($id_user){
        $auth = new DbManager();
        $auth->init();
        $role = $auth->createRole(\Yii::$app->params['roleRoot']);
        $auth->assign($role, $id_user);
    }
}
