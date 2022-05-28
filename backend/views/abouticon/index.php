<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AbouticonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Abouticons');
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bizning malumotlar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=Url::to(['site/index'])?>">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item active"><a href="<?=Url::to(['abouticon/index'])?>">Bizning malumotlar</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="">
                            <a href="<?=Url::to(['abouticon/create'])?>">
                                <div class="card-tools btn btn-success float-right">
                                    <i class="fas fa-plus "></i>
                                </div></a>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


          [
          'attribute'=>'img',
          'format'=>'raw',
          'value'=>function($model)
          {
              return "<img width=40px src='".$model->img."'>";
          }
          ],
            'title',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \common\models\Abouticon $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

