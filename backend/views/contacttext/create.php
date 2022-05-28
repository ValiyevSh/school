<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contacttext */

$this->title = Yii::t('app', 'Create Contacttext');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacttexts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacttext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
