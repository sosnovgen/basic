<?php

namespace app\controllers;

use Yii;
use app\models\Post;
use app\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
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
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

 
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // configure with favored image driver (gd by default)
        Image::configure(array('driver' => 'GD'));

        $model = new Post();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $fileName = UploadedFile::getInstance($model, 'preview');

            if ($fileName !== null) {
                $img_root = 'images/posts/';

                $model->preview = $fileName;
                $model->preview->saveAs($img_root . $fileName);
                $model->preview = $img_root . $fileName;


                $img = Image::make($img_root . $fileName);
                $img->resize(450, 238);
                $img->save($img_root . $fileName);
            }
            $model->save();


            $dataProvider = new ActiveDataProvider([
                'query' => Post::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $this->render('index', ['model' => $model, 'dataProvider' => $dataProvider,]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldFileName = $model->preview;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $fileName = UploadedFile::getInstance($model, 'preview');
            if ($fileName !== null) {
                $img_root = 'images/posts/';

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

            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

 
    public function actionDelete($id)
    {
        $model = Post::findOne($id);

        $fileName = ($model -> preview);
        //$fileName = mb_substr($fileName,1);
        if (is_file($fileName))
        {
            unlink($fileName);
        }

        $model -> delete();

        return $this->redirect('index');
    }


    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
