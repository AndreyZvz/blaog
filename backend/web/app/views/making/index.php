<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MakingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Makings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="making-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Making'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'ProductId',
            'ColorId',
            'FormulaId',
            'Product',
            // 'Amount',
            // 'AmountArea',
            // 'FirstSort',
            // 'FirstArea',
            // 'SecondSort',
            // 'BadWork',
            // 'Recipe',
            // 'Color',
            // 'Produced',
            // 'Sortedby',
            // 'pay_roll',
            // 'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
