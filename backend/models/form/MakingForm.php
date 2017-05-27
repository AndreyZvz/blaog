<?php
namespace backend\models\form;

use yii\base\Model;

class MakingForm extends Model
{
    public $date;
    public $Produced;
    public $ProductId;
    public $ColorId;
    public $Amount;
    
    public function rules()
    {
        return [
            [['date','Produced','ProductId','ColorId','Amount',], 'required'],
        ];
    }
}