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
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            $model ->save();

            Yii::$app->session->setFlash('success', 'Запись сохранена!');
            return $this->render('site/index',['model' => $model] );
        }
        else {
            // Error
            Yii::$app->session->setFlash('error', 'Ошибка! Проверьте правильность заполнения формы.');
            return $this->render('site/index', ['model' => $model]);
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

        return $this->render('view-order', ['dataProvider' => $dataProvider,]);

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
