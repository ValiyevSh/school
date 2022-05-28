<?php

namespace frontend\controllers;
use yii;
use common\models\News;
use yii\data\Pagination;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = News::find()->where(['status' => 1]);

        $pages = new Pagination(['totalCount' => $query->count()
            ,'PageSize'=>10
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
public function actionNewsone()
{
    $id=yii::$app->request->get('id');
    $newsone=News::findOne(['id'=>$id]);

    return $this->render('newsone',['newsone'=>$newsone]);
}
    public function init()
    {
        $lang = Yii::$app->request->get('lang','uz');
        Yii::$app->language = $lang;

        parent::init();
    }
}
