<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    public $layout = 'admin';
    
    public function actionView()
    {
        return $this->render('dashboard');

    }
    public function actionCreate()
    {
        return $this->render('dashboard');

    }

}
