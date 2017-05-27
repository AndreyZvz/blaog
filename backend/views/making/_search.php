<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MakingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="making-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'ProductId') ?>

    <?= $form->field($model, 'ColorId') ?>

    <?= $form->field($model, 'FormulaId') ?>

    <?= $form->field($model, 'Product') ?>

    <?php // echo $form->field($model, 'Amount') ?>

    <?php // echo $form->field($model, 'AmountArea') ?>

    <?php // echo $form->field($model, 'FirstSort') ?>

    <?php // echo $form->field($model, 'FirstArea') ?>

    <?php // echo $form->field($model, 'SecondSort') ?>

    <?php // echo $form->field($model, 'BadWork') ?>

    <?php // echo $form->field($model, 'Recipe') ?>

    <?php // echo $form->field($model, 'Color') ?>

    <?php // echo $form->field($model, 'Produced') ?>

    <?php // echo $form->field($model, 'Sortedby') ?>

    <?php // echo $form->field($model, 'pay_roll') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
