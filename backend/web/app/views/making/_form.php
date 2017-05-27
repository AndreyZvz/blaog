<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Making */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="making-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductId')->textInput() ?>

    <?= $form->field($model, 'ColorId')->textInput() ?>

    <?= $form->field($model, 'FormulaId')->textInput() ?>

    <?= $form->field($model, 'Product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Amount')->textInput() ?>

    <?= $form->field($model, 'AmountArea')->textInput() ?>

    <?= $form->field($model, 'FirstSort')->textInput() ?>

    <?= $form->field($model, 'FirstArea')->textInput() ?>

    <?= $form->field($model, 'SecondSort')->textInput() ?>

    <?= $form->field($model, 'BadWork')->textInput() ?>

    <?= $form->field($model, 'Recipe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Produced')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sortedby')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_roll')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
