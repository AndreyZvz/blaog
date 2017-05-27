<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Making */

$this->title = Yii::t('app', 'Create Making');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Makings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="making-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
