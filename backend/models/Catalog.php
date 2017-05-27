<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Catalog".
 *
 * @property int $ProductId
 * @property int $Enable
 * @property string $ProductName
 * @property int $PcsLength
 * @property int $PcsWidth
 * @property int $PcsHeight
 * @property double $PcsArea
 * @property double $PcsMeter
 * @property int $PcsRow
 * @property int $RowBox
 * @property int $PcsBox
 * @property double $MeterBox
 * @property double $WeightPcs
 * @property double $WeightBox
 * @property double $PriceGrey
 * @property double $PriceColor
 * @property string $LinkImage
 * @property string $Unit
 * @property string $Technology
 * @property int $FormulaId
 * @property int $CountForm
 * @property double $Cost
 * @property double $V Объем
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Catalog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Enable', 'PcsLength', 'PcsWidth', 'PcsHeight', 'PcsRow', 'RowBox', 'PcsBox', 'FormulaId', 'CountForm'], 'integer'],
            [['PcsArea', 'PcsMeter', 'MeterBox', 'WeightPcs', 'WeightBox', 'PriceGrey', 'PriceColor', 'Cost', 'V'], 'number'],
            [['ProductName', 'LinkImage', 'Unit', 'Technology'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductId' => Yii::t('app', 'Product ID'),
            'Enable' => Yii::t('app', 'Enable'),
            'ProductName' => Yii::t('app', 'Product Name'),
            'PcsLength' => Yii::t('app', 'Pcs Length'),
            'PcsWidth' => Yii::t('app', 'Pcs Width'),
            'PcsHeight' => Yii::t('app', 'Pcs Height'),
            'PcsArea' => Yii::t('app', 'Pcs Area'),
            'PcsMeter' => Yii::t('app', 'Pcs Meter'),
            'PcsRow' => Yii::t('app', 'Pcs Row'),
            'RowBox' => Yii::t('app', 'Row Box'),
            'PcsBox' => Yii::t('app', 'Pcs Box'),
            'MeterBox' => Yii::t('app', 'Meter Box'),
            'WeightPcs' => Yii::t('app', 'Weight Pcs'),
            'WeightBox' => Yii::t('app', 'Weight Box'),
            'PriceGrey' => Yii::t('app', 'Price Grey'),
            'PriceColor' => Yii::t('app', 'Price Color'),
            'LinkImage' => Yii::t('app', 'Link Image'),
            'Unit' => Yii::t('app', 'Unit'),
            'Technology' => Yii::t('app', 'Technology'),
            'FormulaId' => Yii::t('app', 'Formula ID'),
            'CountForm' => Yii::t('app', 'Count Form'),
            'Cost' => Yii::t('app', 'Cost'),
            'V' => Yii::t('app', 'V'),
        ];
    }
    public function getMakings()
    {
        return $this->hasOne(Making::className(), ['ProductId' => 'ProductId']);
    }
}
