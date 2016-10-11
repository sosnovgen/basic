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

    /**
     * Displays homepage.
     *
     * @return string
     */
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

    
    
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
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

    /*------------ detal information ---------------*/
    public function actionDetal($id)
    {

        $model2 = new Order();
        $this->view->params['model2'] = $model2;
        
        $detal = Front::findOne($id);

        return $this->render('detal',
            [
                'detal' => $detal,
            ]);
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

}
