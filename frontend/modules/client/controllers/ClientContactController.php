<?php

namespace frontend\modules\client\controllers;

use Yii;
use backend\models\ClientContact;
use backend\models\ClientContactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClientContactController implements the CRUD actions for ClientContact model.
 */
class ClientContactController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ClientContact models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClientContactSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ClientContact model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new ClientContact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ClientContact();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = 'json';
            
            if($this->validateIsEmptyNumberPhone($model) == 1){
                $message = 'Debe diligenciar al menos un número de celular o local';
                $state = '2';
                return ['state' => $state,'message' => $message,'model'=>$model];
            }else{
                return \backend\controllers\BaseController::validateForm($model);
            }
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ClientContact model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = 'json';
            
            if($this->validateIsEmptyNumberPhone($model) == 1){
                $message = 'Debe diligenciar al menos un número telefónico celular o local';
                $state = '2';
                return ['state' => $state,'message' => $message,'model'=>$model];
            }else{
                return \backend\controllers\BaseController::validateForm($model);
            }
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ClientContact model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->response->format = 'json';
        return ['state' => '1'];
    }

    /**
     * Finds the ClientContact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ClientContact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClientContact::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    private function validateIsEmptyNumberPhone($model)
    {
        Yii::$app->response->format = 'json';
        if(empty($model->cell_phone) && empty($model->local_phone)){
            return true; 
        }else{
            return false;
        }
    }
}
