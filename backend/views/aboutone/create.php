<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Aboutone */

$this->title = Yii::t('app', 'Create Aboutone');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aboutones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
