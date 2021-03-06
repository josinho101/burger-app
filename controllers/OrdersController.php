<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Orders;

class OrdersController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','contact','build-preview','checkout'],
                'rules' => [
                    [
                        'actions' => ['build-preview'],
                        'allow' => true,
                        'roles' => ['?','@'],
                    ],
                    [
                        'actions' => ['index','contact','checkout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'build-preview' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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
        return $this->render('index');
    }

    /**
     * Displays contactpage.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new Orders();
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * ajax method for session
     *
     * @return string
     */
    public function actionBuildPreview()
    {
        
        $session = Yii::$app->session;
        $session['ingredients'] = isset($_POST['ingredients']) ? $_POST['ingredients'] : '';
        $session['burgerCost'] = isset($_POST['totalCost']) ? $_POST['totalCost'] : 0.00;
        echo 'success';
        exit;
    }

    public function actionPreview()
    {
        $session = Yii::$app->session;
        return $this->render('preview', [
            'ingredients' => $session['ingredients'],
            
            ]);
        
    }
}