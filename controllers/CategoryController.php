<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Category;

class CategoryController extends Controller
{
    public $layout = 'admin';

    public function actionCreate($id)
    {
        $cat = new Category();
        $cat ->title = $id;
        $cat ->save();

        $countries = Category::find()->orderBy('title')->all();

        return $this->render('tree',['tests'=> $countries,]);

    }

    public function actionAdd()
    {
        $model = new Category();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
        $model ->save();
            // делаем что-то полезное с $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }



    }

}