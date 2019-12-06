<?php

namespace app\controllers;

use app\models\MstUsers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use yii\web\Session;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->actionLogin();
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $model = new LoginForm();

        if(Yii::$app->request->post())
        {
            if ($model->load(Yii::$app->request->post()) && $model->login())
            {
                $user_data=MstUsers::find()->select(['id','userref_id'])->where(['status'=>1,'is_deleted'=>0,'username'=>$model['username']])->one();

                $session=Yii::$app->session;

                if($session->isActive)
                    $session->open();

                if(!empty($user_data['id']))
                    $session->set('user_id',$user_data['id']);
                if(!empty($user_data['userref_id']))
                    $session->set('userref_id',$user_data['userref_id']);
                if(!empty($user_data['username']))
                    $session->set('username',$user_data['username']);

            return $this->redirect(['ars/index']);
            }
        }

        $this->layout='login';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'username',
            'value' => Yii::$app->user->identity->username,
        ]));
        Yii::$app->user->logout();

        $session = Yii::$app->session;
        if($session->isActive){
            $session->open();
            $session->destroy();
        }
        $this->layout='login';
        return $this->redirect(array('site/login'));
    }
}