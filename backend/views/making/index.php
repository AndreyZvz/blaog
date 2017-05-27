<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


$this->title = Yii::t('app', 'Изготовление');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="making-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Изготовление'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Сортировка'), ['update'], ['class' => 'btn btn-success']) ?>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal">Open Modal</button>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'catalogs.ProductName:text:Наименовние',                            
            'colors.ColorName:text:Цвет',
            'Amount:text:Колличество',
            'AmountArea:text:СИ',
            
            
            //'ColorId',
            //'FormulaId',
            //'Product',
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
            [
            'attribute'=>'date', 
            //'width'=>'50px',
            //'group'=>true,  // enable grouping
        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
