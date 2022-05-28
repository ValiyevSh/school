<?php

namespace frontend\controllers;
use yii;

use common\models\Teacher;
use yii\data\Pagination;

class TeacherController extends \yii\web\Controller
{
    public function actionIndex()
    { $query = Teacher::find()->where(['status' => 1]);

        $pages = new Pagination(['totalCount' => $query->count(),
                'pageSize'=>10]
        );
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
public function actionTeacherone()
{
    $id=yii::$app->request->get('id');
    $teacherone=Teacher::findOne(['id'=>$id]);

    return $this->render('teacherone',['teacherone'=>$teacherone]);
  }
    public function init()
    {
        $lang = Yii::$app->request->get('lang','uz');
        Yii::$app->language = $lang;

        parent::init();
    }
}
