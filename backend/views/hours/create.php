<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hours */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hours'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hours-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
