<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'EmployeeID') ?>

    <?= $form->field($model, 'EmployeeName') ?>

    <?= $form->field($model, 'Passport') ?>

    <?= $form->field($model, 'Birthdate') ?>

    <?= $form->field($model, 'Speciality') ?>

    <?php // echo $form->field($model, 'Hired') ?>

    <?php // echo $form->field($model, 'Fired') ?>

    <?php // echo $form->field($model, 'Rate') ?>

    <?php // echo $form->field($model, 'Earned') ?>

    <?php // echo $form->field($model, 'PaidOut') ?>

    <?php // echo $form->field($model, 'Balance') ?>

    <?php // echo $form->field($model, 'Subdivision') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
