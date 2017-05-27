<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Making */

$this->title = Yii::t('app', 'Изготовление');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Производство'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="making-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('makingForm', [
        'model' => $model,
    ]) ?>

</div>
