<?php

namespace app\controllers;

use Yii;
use app\models\Order;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;


class OrderController extends \yii\web\Controller
{
    public $layout = 'admin';

    public function actionCreate()
    {
        $model = new Order();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->save();

            $dataProvider = new ActiveDataProvider([
                'query' => Order::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $this->redirect('view');
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionView()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Order::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('view', ['dataProvider' => $dataProvider,]);

    }

    public function actionUpdate($id){

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,

            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect('view');
    }

    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Запрашиваемая страница не найдена.');
        }
    }

}
