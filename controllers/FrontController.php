<?php

namespace app\controllers;

use Yii;
use app\models\Front;
use app\models\FronttSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * FrontController implements the CRUD actions for Front model.
 */
class FrontController extends Controller
{

    public $layout = 'admin';

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
     * Lists all Front models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FronttSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Front model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Front::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('view', ['dataProvider' => $dataProvider,]);
    }

    /**
     * Creates a new Front model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Front();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $dataProvider = new ActiveDataProvider([
                'query' => Front::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);
            
            return $this->render('view', ['model' => $model, 'dataProvider' => $dataProvider,]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Front model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Front model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Front model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Front the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Front::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
