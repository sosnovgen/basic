<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Front;
use app\models\Order;
use app\models\Plan;
use app\models\Post;
use yii\helpers\Url;


class SiteController extends Controller
{

    public $layout = 'site';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

 /*-----------------  index  -------------------*/
    public function actionIndex()
    {
        $this -> view-> title = 'Neil5Art';
        $this -> view -> registerMetaTag([
            'name' => 'description',
            'content' => 'школа обучения маникюра'
        ]);
        $this -> view -> registerMetaTag([
            'name' => 'keywords',
            'content' => 'методика гель типсы'
        ]);

        /*second row*/
        $seconds = Front::find()
            ->where(['group' => 'one_page'])-> orderBy('priznak')
            ->all();

        $model2 = new Order();
        $this->view->params['model2'] = $model2;
        
        return $this->render('index',
            [
            'seconds' => $seconds,

            ]);

    }

    public function actionTest() 
    {
        $seconds = Front::find()
            ->where(['group' => 'one_page'])
            ->all();

        return $this->render('test',
            [
                'seconds' => $seconds,

            ]);       

    }

/*---------------------------------------------------------------------------*/
    
    public function actionLogin()
    {
        $this -> layout = 'login';
        if (!Yii::$app->user->isGuest) {
            /*return $this->redirect(Yii::$app->urlManager->createUrl('plan/view'));*/
            return $this->redirect (Url::to(['plan/view']));
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect (Url::to(['plan/view']));;
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

        /* actionLogout -> AdminController.php */

    /*----------------------------------------------------------------------------*/
 
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCreate()
    {
        $seconds = Front::find()
            ->where(['group' => 'one_page'])-> orderBy('priznak')
            ->all();

        $model = new Order();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            $model ->save();

            Yii::$app->session->setFlash('success', 'Запись сохранена!');
            return $this->redirect('index');
        }
        else {
            // Error
            Yii::$app->session->setFlash('error', 'Ошибка! Проверьте правильность заполнения формы.');
            return $this->redirect('index');
        }
    }

    /*------------ detal information ---------------*/
    public function actionDetal($id)
    {
        $model2 = new Order();
        $this->view->params['model2'] = $model2;
        
        $model = Plan::findOne($id);
        return $this->render('detal',
            [
                'model' => $model,
            ]);
    }

    /*------------ Price ---------------*/
    public function actionPrice()
    {
        $model2 = new Order();
        $this->view->params['model2'] = $model2;

        $models = Plan::find() ->all();

        $colors = array('5CB85C','D9534F','5BC0DE','CC990A','D058DE','131EDE','EBEA1E',
            '5CB85C','5BC0DE','CC990A','5CB85C','D9534F','5BC0DE','CC990A','D058DE','131EDE',
            '5CB85C','D9534F','5BC0DE','CC990A','D058DE','131EDE','EBEA1E',);

        return $this->render('price', [
            'colors' => $colors,
            'models' => $models,]);
    }

    /*------------ detal information ---------------*/
    public function actionChart()
    {
        $model2 = new Order();
        $this->view->params['model2'] = $model2;

        $models = Plan::find() ->all();
        return $this->render('chart',
            [
                'models' => $models,
            ]);
    }

    /*----------- posts   ------------*/
    public function actionPost(){
        
        $model2 = new Order();
        $this->view->params['model2'] = $model2;
        
        $models = Post::find() ->all();
        return $this->render('post',
            [
                'models' => $models,
            ]); 
        
        
        
        
        
    }
    
    
}
