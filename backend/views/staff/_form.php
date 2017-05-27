<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmployeeName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Passport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Birthdate')->textInput() ?>

    <?= $form->field($model, 'Speciality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subdivision')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
