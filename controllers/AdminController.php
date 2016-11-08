<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;

class AdminController extends Controller
{
    //public $layout = 'admin';
    public $layout = 'admin';
    
    public function actionIndex()
    {
        /*return $this->redirect (Url::to(['plan/view']));*/
        return $this->redirect('site/login');

    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }


}
