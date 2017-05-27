<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = Yii::t('app', 'Добавить');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Штат сотрудников'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
