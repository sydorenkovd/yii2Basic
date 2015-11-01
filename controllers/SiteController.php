<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MyForm;
use app\models\Comments;
use yii\web\UploadedFile;

class SiteController extends Controller
{
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
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

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

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

    public function actionAbout()
    {
        return $this->render('about');
    }
//    public function actionHello($message = 'World'){
//        return $this->render('Hello', ['message'=>$message]);
//    }
    /**
     *
     * @return string
     */
    public function actionForm(){
        $form = new MyForm();
        if($form->load(Yii::$app->request->post()) and $form->validate()){
            $name = Html::encode($form->name);
            $email = Html::encode($form->email);
//            $file = $form->file;
            $form->file = UploadedFile::getInstance($form, 'file');
            $form->file->saveAs("img/".$form->file->baseName.".".$form->file->extension);
        } else {
            $name = '';
            $email = '';
//            $file = '';
        }
        return $this->render('form', ['form'=>$form,
        'name'=>$name,
        'email'=>$email,
//                'file'=>$file,
        ]
        );
    }
    public function actionComments(){
        $comments = Comments::find()->all();
        return $this->render('comments',
            ['comments'=>$comments]
    );
    }
}
