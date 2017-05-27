<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = $model->EmployeeID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Штат сотрудников'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Обновить'), ['update', 'id' => $model->EmployeeID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Удалить'), ['delete', 'id' => $model->EmployeeID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Удалить выбранную запись?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'EmployeeID',
            'EmployeeName',
            'Passport',
            'Birthdate',
            'Speciality',
            'Hired',
            'Fired',
            'Rate',
            'Earned',
            'PaidOut',
            'Balance',
            'Subdivision',
        ],
    ]) ?>

</div>
