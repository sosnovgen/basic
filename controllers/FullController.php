<?php

namespace app\controllers;

use app\models\Plan;
use Yii;
use yii\web\Controller;
use app\models\Full;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class FullController extends \yii\web\Controller
{
    public $layout = 'admin';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        $param = ['options' =>[ '' => ['Selected' => false]]];

        $plans = Plan::find() ->all();
        foreach ($plans as $plan):
           $list[$plan ->id] = $plan ->title ;
        endforeach;
        
        $model = new Full();
        if ($model->load(Yii::$app->request->post()) && $model->validate())  {
            $model->save();
            $dataProvider = new ActiveDataProvider([
                'query' => Full::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $this->render('view',
                [
                    'model' => $model,
                    'dataProvider' => $dataProvider,
                ]);
        }
        else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('create',
                ['model' => $model,
                 'list' => $list,
                 'param' => $param,
            ]);
        }

    }

    public function actionUpdate($id){

        $plans = Plan::find() ->all();
        foreach ($plans as $plan):
            $list[$plan ->id] = $plan ->title ;
        endforeach;
        
        $model = $this->findModel($id);

        $param = ['options' =>[ $model ->id => ['Selected' => true]]];

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'list' => $list,
                'param' => $param,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['view']);
    }
    

    protected function findModel($id)
    {
        if (($model = Full::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Запрашиваемая страница не существует.');
        }
    }


    public function actionView()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Full::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('view', ['dataProvider' => $dataProvider,]);

    }



}
