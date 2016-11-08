<?php

namespace frontend\modules\quote\controllers;

use Yii;
use backend\models\Quote;
use backend\models\QuoteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use backend\models\QuoteServiceSearch;
use kartik\mpdf\Pdf;
use mPDF;

/**
 * QuoteController implements the CRUD actions for Quote model.
 */
class QuoteController extends Controller
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
     * Lists all Quote models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QuoteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Quote model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $modelSearchQuoteService = new QuoteServiceSearch();
        $dataSearchQuoteService = $modelSearchQuoteService->search(Yii::$app->request->queryParams,$id);
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'modelSearchQuoteService'=>$modelSearchQuoteService,
            'dataSearchQuoteService'=>$dataSearchQuoteService
        ]);
    }

    /**
     * Creates a new Quote model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Quote();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = 'json';
            if($this->validateIsEmptyDiscount($model) == 1){
                $message = 'Descuento no puede estar vacio';
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
     * Updates an existing Quote model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = 'json';
            if($this->validateIsEmptyDiscount($model) == 1){
                $message = 'Descuento no puede estar vacio';
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
     * Deletes an existing Quote model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Quote model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Quote the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Quote::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    private function validateIsEmptyDiscount($model)
    {
        if($model->apply_discount == 1){
            if(empty($model->discount))
                return true;
            else
                return false;
        }
    }
    
    public function actionExportQuote($id) {
        $model = $this->findModel($id);
        $time = time();
        $header = $this->renderPartial('exportQuote/_headerQuote');
        $footer = $this->renderPartial('exportQuote/_footerQuote');
        $content = $this->renderPartial('exportQuote/_bodyQuote', ['model' => $model]);
        $conditionsQuote = $this->renderPartial('exportQuote/_conditionsQuote', ['model' => $model]);

        $mpdf = new mPDF('c', 'A4', '12', '', 10, 10, 48, 50, 16, 9);
        $mpdf->SetDisplayMode('fullpage');
        
        $stylesheet = file_get_contents("../web/css/exportQuote.css");
        $mpdf->WriteHTML($stylesheet, 1);

        $mpdf->SetHTMLHeader($header);
        $mpdf->setFooter($footer);
        $mpdf->WriteHTML($content);
        $mpdf->WriteHTML($conditionsQuote);

        $name = 'XXX-' . $model->id .'-'.$time;
        
        echo $mpdf->Output($folder . $name . '.pdf', "I");
        exit;
    }
}
