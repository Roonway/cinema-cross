<?php

namespace backend\controllers;

use Yii;
use common\models\PhoneClient;
use backend\models\PhoneClientSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PhoneClientController implements the CRUD actions for PhoneClient model.
 */
class PhoneClientController extends Controller
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
     * Lists all PhoneClient models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhoneClientSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PhoneClient model.
     * @param integer $client_id
     * @param string $phone
     * @return mixed
     */
    public function actionView($client_id, $phone)
    {
        return $this->render('view', [
            'model' => $this->findModel($client_id, $phone),
        ]);
    }

    /**
     * Creates a new PhoneClient model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PhoneClient();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'client_id' => $model->client_id, 'phone' => $model->phone]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PhoneClient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $client_id
     * @param string $phone
     * @return mixed
     */
    public function actionUpdate($client_id, $phone)
    {
        $model = $this->findModel($client_id, $phone);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'client_id' => $model->client_id, 'phone' => $model->phone]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PhoneClient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $client_id
     * @param string $phone
     * @return mixed
     */
    public function actionDelete($client_id, $phone)
    {
        $this->findModel($client_id, $phone)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PhoneClient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $client_id
     * @param string $phone
     * @return PhoneClient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($client_id, $phone)
    {
        if (($model = PhoneClient::findOne(['client_id' => $client_id, 'phone' => $phone])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
