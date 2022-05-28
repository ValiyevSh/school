<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hours */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hours'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="hours-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
