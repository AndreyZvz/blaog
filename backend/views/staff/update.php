<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = Yii::t('app', 'Обновить');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Штат Сотрудников'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->EmployeeID, 'url' => ['view', 'id' => $model->EmployeeID]];
//$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="staff-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
