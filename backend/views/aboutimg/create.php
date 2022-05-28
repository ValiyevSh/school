<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Aboutimg */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aboutimgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutimg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
