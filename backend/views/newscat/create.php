<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Newscat */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Newscats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newscat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
