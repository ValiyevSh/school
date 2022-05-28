<?php

namespace frontend\controllers;
use yii;
use common\models\Classes;
use yii\data\Pagination;

class ClassesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Classes::find()->where(['status' => 1])->orderBy(['id'=>SORT_DESC]);

        $pages = new Pagination(['totalCount' => $query->count(),
            'pageSize'=>10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);

    }
    public function init()
    {
        $lang = Yii::$app->request->get('lang','uz');
        Yii::$app->language = $lang;

        parent::init();
    }
    public function actionClassessingle()
    {
        $id=yii::$app->request->get('id');
        $classess=Classes::findOne(['id'=>$id]);
        return $this->render('classessingle',['classes'=>$classess]);
    }

}
