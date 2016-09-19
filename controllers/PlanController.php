<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Plan;
use yii\web\UploadedFile;

class PlanController extends Controller
{
    public $layout = 'bootsnip';

    public function actionCreate()
    {
        $model = new Plan();
        if ($model->load(Yii::$app->request->post()) && $model->validate())  {

            $fileName = UploadedFile::getInstance($model, 'preview');
            $model -> preview = $fileName;
            $model ->save();
            $model -> preview -> saveAs('images/'.$fileName);

            return $this->render('plan-view', ['model' => $model,]);
        }
        else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('plan-entry', ['model' => $model]);
        }

    }




}