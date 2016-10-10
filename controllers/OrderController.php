<?php

namespace app\controllers;

use Yii;
use app\models\Order;
use yii\web\Controller;

class OrderController extends \yii\web\Controller
{
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

}
