<?php

namespace app\controllers;

use Yii;
use app\models\Front;
use app\models\FronttSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

/**
 * FrontController implements the CRUD actions for Front model.
 */
class FrontController extends Controller
{

    public $layout = 'admin';

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Front models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FronttSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Front model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Front::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('view', ['dataProvider' => $dataProvider,]);
    }

    /**
     * Creates a new Front model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // configure with favored image driver (gd by default)
        Image::configure(array('driver' => 'GD'));

        $model = new Front();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $fileName = UploadedFile::getInstance($model, 'preview');

            if ($fileName !== null) {
                $img_root = 'images/one_page/';

                $model->preview = $fileName;
                $model->preview->saveAs($img_root . $fileName);
                $model->preview = $img_root . $fileName;


                $img = Image::make($img_root . $fileName);
                $img->resize(450, 238);
                $img->save($img_root . $fileName);
            }
            $model->save();


            $dataProvider = new ActiveDataProvider([
                'query' => Front::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);
            
            return $this->render('view', ['model' => $model, 'dataProvider' => $dataProvider,]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

 
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldFileName = $model->preview;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $fileName = UploadedFile::getInstance($model, 'preview');
            if ($fileName !== null) {
                $img_root = 'images/one_page/';

                $model->preview = $fileName;
                $model->preview->saveAs($img_root . $fileName);
                $model->preview = $img_root . $fileName;

                $img = Image::make($img_root . $fileName);
                $img->resize(450, 238);
                $img->save($img_root . $fileName);
            }
            else{
                $model->preview = $oldFileName;
            }
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    
    public function actionDelete($id)
    {
        $model = Front::findOne($id);

        $fileName = ($model -> preview);
        //$fileName = mb_substr($fileName,1);
        if (is_file($fileName))
        {
            unlink($fileName);
        }

        $model -> delete();

        return $this->redirect('view');
    }

    /**
     * Finds the Front model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Front the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Front::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
