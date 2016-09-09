<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Category;

class TestController extends Controller
{
    public $layout = 'admin';

    public function actionView($id)
    {
        $cat = new Category();
        $cat ->title = $id;
        $cat ->save();

        $countries = Category::find()->orderBy('title')->all();


        return $this->render('test',['tests'=> $countries,]);

    }

}
