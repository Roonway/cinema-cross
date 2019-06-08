<?php

namespace backend\controllers;

use Yii;
use common\models\PhoneEmployee;
use backend\models\PhoneEmployeeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PhoneEmployeeController implements the CRUD actions for PhoneEmployee model.
 */
class PhoneEmployeeController extends Controller
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
     * Lists all PhoneEmployee models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhoneEmployeeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PhoneEmployee model.
     * @param integer $employee_id
     * @param string $phone
     * @return mixed
     */
    public function actionView($employee_id, $phone)
    {
        return $this->render('view', [
            'model' => $this->findModel($employee_id, $phone),
        ]);
    }

    /**
     * Creates a new PhoneEmployee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PhoneEmployee();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'employee_id' => $model->employee_id, 'phone' => $model->phone]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PhoneEmployee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $employee_id
     * @param string $phone
     * @return mixed
     */
    public function actionUpdate($employee_id, $phone)
    {
        $model = $this->findModel($employee_id, $phone);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'employee_id' => $model->employee_id, 'phone' => $model->phone]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PhoneEmployee model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $employee_id
     * @param string $phone
     * @return mixed
     */
    public function actionDelete($employee_id, $phone)
    {
        $this->findModel($employee_id, $phone)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PhoneEmployee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $employee_id
     * @param string $phone
     * @return PhoneEmployee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($employee_id, $phone)
    {
        if (($model = PhoneEmployee::findOne(['employee_id' => $employee_id, 'phone' => $phone])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
