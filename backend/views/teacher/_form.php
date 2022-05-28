<?php

use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>O'qituvchilar bo'limi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= Url::home() ?>">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item active"><a href="<?= Url::to(['teacher/index']) ?>">O'qituvchilar</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">

                <div class="card-body">


<?php $form = ActiveForm::begin() ?>

<?= $form->languageSwitcher($model); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'work')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'img')->widget(\mihaildev\elfinder\InputFile::className(), [
    'language'      => 'ru',
    'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-default'],
    'multiple'      => false       // возможность выбора нескольких файлов
]);
?>
<?= $form->field($model, 'content')->widget(\mihaildev\ckeditor\CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]); ?>
<?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

</section>

