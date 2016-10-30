<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class BaseController extends Controller
{
    public static function validateForm($model) {
        if ($model->validate()) {
            $model->save();
            $model->refresh();
            $message = 'Success';
            $state = '1';
        } else {
            $message = $model->errors;
            $state = '0';
        }
        return ['state' => $state, 'message' => $message, 'model' => $model];
    }
}
