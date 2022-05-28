<?php

namespace frontend\controllers;
use yii;
use common\models\Messagess;

class ContactController extends \yii\web\Controller
{
    public function init()
    {
        $lang = Yii::$app->request->get('lang','uz');
        Yii::$app->language = $lang;

        parent::init();
    }
    public function actionIndex()
    {
        $model=new Messagess();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo "saqlandi";
            exit();
        }
        else
        {

        }
        return $this->render('index',['model'=>$model]);
    }


}
