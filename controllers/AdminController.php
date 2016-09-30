<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    //public $layout = 'admin';
    public $layout = 'admin';
    
    public function actionIndex()
    {
        return $this->redirect('plan/view');

    }


}
