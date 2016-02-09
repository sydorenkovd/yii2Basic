<?php

namespace app\controllers;

use yii\web\Controller;

class InstanceController extends Controller
{
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
//            'index' => [
//                'class' => 'yii\web\ViewAction',
//            ],
        ];
    }
    public function actionIndex()
    {
        $newsList = $this->dataItems();
        return $this->render('index', ['newsList' => $newsList]);
    }
    public function actionDetails($title){
        $newsList = $this->dataItems();
        $item = null;
        foreach($newsList as $n)
        {
            if($title == $n['title']) $item = $n;
     }
        return $this->render('details', ['item' => $item]);
    }
    public function dataItems(){
        $newsList = [
            [ 'title' => 'First World War', 'date' => '1914-07-28' ],
            [ 'title' => 'Second World War', 'date' => '1939-09-01' ],
            [ 'title' => 'First man on the moon', 'date' => '1969-07-20' ]
        ];
        return $newsList;
    }

}
