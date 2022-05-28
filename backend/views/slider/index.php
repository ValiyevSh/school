<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->title = 'Slayder qismi';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                    <h1>Slayder qismi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=Url::to(['slider/index'])?>">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item active"><a href="<?=Url::to(['slider/index'])?>">Slayder qismi</a></li>
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
                            <a href="<?=Url::to(['slider/create'])?>">
                                <div class="card-tools btn btn-success float-right">
                                    <i class="fas fa-plus "></i>
                                </div></a>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <?php
                            \yii\widgets\Pjax::begin();
                            ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            'title',

           [

                    'attribute'=>'img',
               'format'=>'raw',
               'value'=>function($model)
               {
                   return "<img width=40px height=30px src='".$model->img."'>";
               }
           ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \common\models\Slider $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]);
                            \yii\widgets\Pjax::end();
    ?>

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

