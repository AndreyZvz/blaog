<?php

namespace backend\models;

use Yii;
use backend\models\Catalog;

/**
 * This is the model class for table "Making".
 *
 * @property int $ID
 * @property int $ProductId
 * @property int $ColorId
 * @property int $FormulaId
 * @property string $Product
 * @property int $Amount
 * @property double $AmountArea
 * @property int $FirstSort
 * @property double $FirstArea
 * @property int $SecondSort
 * @property int $BadWork
 * @property string $Recipe
 * @property string $Color
 * @property string $Produced
 * @property string $Sortedby
 * @property double $pay_roll
 * @property string $date
 */
class Making extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Making';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'ColorId', 'FormulaId', 'Amount', 'FirstSort', 'SecondSort', 'BadWork'], 'integer'],
            [['AmountArea', 'FirstArea', 'pay_roll'], 'number'],
            [['date'], 'safe'],
            [['Product', 'Recipe', 'Produced'], 'string', 'max' => 50],
            [['Color'], 'string', 'max' => 100],
            [['Sortedby'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'ProductId' => Yii::t('app', 'Product ID'),
            'ColorId' => Yii::t('app', 'Color ID'),
            'FormulaId' => Yii::t('app', 'Formula ID'),
            'Product' => Yii::t('app', 'Product'),
            'Amount' => Yii::t('app', 'Amount'),
            'AmountArea' => Yii::t('app', 'Amount Area'),
            'FirstSort' => Yii::t('app', 'First Sort'),
            'FirstArea' => Yii::t('app', 'First Area'),
            'SecondSort' => Yii::t('app', 'Second Sort'),
            'BadWork' => Yii::t('app', 'Bad Work'),
            'Recipe' => Yii::t('app', 'Recipe'),
            'Color' => Yii::t('app', 'Color'),
            'Produced' => Yii::t('app', 'Produced'),
            'Sortedby' => Yii::t('app', 'Sortedby'),
            'pay_roll' => Yii::t('app', 'Pay Roll'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
    public function getCatalogs()
    {
        return $this->hasOne(Catalog::className(), ['ProductId' => 'ProductId']);
    }
        public function getColors()
    {
        return $this->hasOne(Color::className(), ['ColorId' => 'ColorId']);
    }
}
