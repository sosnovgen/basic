<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Category;
use yii\web\UploadedFile;

class CategoryController extends Controller
{
    public $layout = 'admin';

    public function actionCreate()
    {
        $cat = new Category();
        if ($cat->load(Yii::$app->request->post()) && $cat->validate()) {
            $cat->save();

            return $this->render('tree', ['test' => $cat,]);
        }
        else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('tree', ['test' => $cat]);
    }
    
    }

    public function actionAdd()
    {
        $model = new Category();
        if ($model ->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверен

        $model ->save();
            // делаем что-то полезное с $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }



    }

    public function actionInput()
    {
        $model = new Category();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            $model -> preview =
            $fileName = UploadedFile::getInstance($model, 'preview');
            $model ->save();
            $model -> preview -> saveAs('images/'.$fileName);


            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('crecate', ['model' => $model]);
        }

        
    }
    
    
}