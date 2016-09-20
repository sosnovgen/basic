<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Plan;
use yii\web\UploadedFile;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;
use yii\data\ActiveDataProvider;



class PlanController extends Controller
{
    public $layout = 'bootsnip';

    public function actionCreate()
    {
        // configure with favored image driver (gd by default)
        Image::configure(array('driver' => 'GD'));

        $model = new Plan();
        if ($model->load(Yii::$app->request->post()) && $model->validate())  {

            $fileName = UploadedFile::getInstance($model, 'preview');

            $img_root = 'images/lessons/';

            $model -> preview = $fileName;
            $model -> preview -> saveAs($img_root.$fileName);
            $model -> preview = $img_root.$fileName;
            $model ->save();

            $img = Image::make($img_root. $fileName);
            $img->resize(300, 200);
            $img->save($img_root. $fileName);

            return $this->render('plan-view', ['model' => $model,]);
        }
        else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('plan-entry', ['model' => $model]);
        }

    }

    public function actionView()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Plan::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        
        return $this->render('plan-view', ['dataProvider' => $dataProvider,]);
        
    }


}