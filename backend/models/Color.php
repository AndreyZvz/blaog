<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Color".
 *
 * @property int $ColorID
 * @property string $ColorCode
 * @property string $ColorName
 * @property double $ColorCost
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ColorCost'], 'number'],
            [['ColorCode', 'ColorName'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ColorID' => Yii::t('app', 'Color ID'),
            'ColorCode' => Yii::t('app', 'Color Code'),
            'ColorName' => Yii::t('app', 'Color Name'),
            'ColorCost' => Yii::t('app', 'Color Cost'),
        ];
    }
}
