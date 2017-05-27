<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Staff".
 *
 * @property int $EmployeeID
 * @property string $EmployeeName ФИО
 * @property string $Passport
 * @property string $Birthdate
 * @property string $Speciality
 * @property string $Hired Принят на работу
 * @property string $Fired Уволен
 * @property double $Rate Ставка
 * @property double $Earned Заработано
 * @property double $PaidOut Выплачено
 * @property double $Balance Остаток
 * @property int $Subdivision Подразделение
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Birthdate', 'Hired', 'Fired'], 'safe'],
            [['EmployeeName','Passport','Birthdate'], 'required'],
            [['Rate', 'Earned', 'PaidOut', 'Balance'], 'number'],
            [['Subdivision'], 'string', 'max' => 100],
            [['EmployeeName'], 'string', 'max' => 100],
            [['Passport', 'Speciality'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Staff' => Yii::t('app', '#'),
            'EmployeeID' => Yii::t('app', '#'),
            'EmployeeName' => Yii::t('app', 'Фио'),
            'Passport' => Yii::t('app', 'Фото'),
            'Birthdate' => Yii::t('app', 'Дата Рождения'),
            'Speciality' => Yii::t('app', 'Специальность'),
            'Hired' => Yii::t('app', 'Принят'),
            'Fired' => Yii::t('app', 'Уволен'),
            'Rate' => Yii::t('app', 'Ставка'),
            'Earned' => Yii::t('app', 'Заработано'),
            'PaidOut' => Yii::t('app', 'Выплачено'),
            'Balance' => Yii::t('app', 'Баланс'),
            'Subdivision' => Yii::t('app', 'Подразделение'),
        ];
    }
}
