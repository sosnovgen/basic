<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Plan;
use yii\web\UploadedFile;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;



class PlanController extends Controller
{
    public $layout = 'admin';

    public function actionCreate()
    {
        // configure with favored image driver (gd by default)
        Image::configure(array('driver' => 'GD'));

        $model = new Plan();
        if ($model->load(Yii::$app->request->post()) && $model->validate())  {

            $fileName = UploadedFile::getInstance($model, 'preview');
            if ($fileName !== null) {

                $img_root = 'images/lessons/';

                $model->preview = $fileName;
                $model->preview->saveAs($img_root . $fileName);
                $model->preview = $img_root . $fileName;

                $img = Image::make($img_root . $fileName);
                $img->resize(450, 238);
                $img->save($img_root . $fileName);
            }

            $model->save();

            $dataProvider = new ActiveDataProvider([
                'query' => Plan::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $this->render('plan-view',
                [
                    'model' => $model,
                    'dataProvider' => $dataProvider,
                ]);
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


    public function actionDelete($id){

    $model = Plan::findOne($id);

    $fileName = ($model -> preview);
    //$fileName = mb_substr($fileName,1);
    if (is_file($fileName))
    {
        unlink($fileName);
    }

    $model -> delete();
    return $this->redirect('view');
}

    /*---------------------------------------------------------*/
    protected function findModel($id)
    {
        if (($model = Plan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Запрашиваемая страница не существует.');
        }
    }

    /*---------------------------------------------------------------------*/
    public function actionUpdate($id){

        $model = $this->findModel($id);
        $oldFileName = $model->preview;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $fileName = UploadedFile::getInstance($model, 'preview');

            if ($fileName !== null) {
                if (is_file($oldFileName)){
                    unlink($oldFileName);
                }

                $img_root = 'images/lessons/';

                $model->preview = $fileName;
                $model->preview->saveAs($img_root . $fileName);
                $model->preview = $img_root . $fileName;

                $img = Image::make($img_root . $fileName);
                $img->resize(410, 238);
                $img->save($img_root . $fileName);

            }
            else{
                $model->preview = $oldFileName;
            }

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('plan-entry', [
                'model' => $model,
            ]);
        }
    }

    public function actionStart()
    {
        return $this->render('start');

    }
    
}