<?php

namespace frontend\controllers;

class AboutController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function init()
    {
        $lang = Yii::$app->request->get('lang','uz');
        Yii::$app->language = $lang;

        parent::init();
    }
}
