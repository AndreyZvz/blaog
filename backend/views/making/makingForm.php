<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use backend\models\Catalog;
use backend\models\Color;
use backend\models\Staff;

$form = ActiveForm::begin([
    'id' => 'making-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<div class='conteiner'>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal">Open Modal</button>

  <div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Изготовление</h4>
        </div>
        <div class="modal-body">
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <div class='row'>    
                        <div class='col-md-5' style='margin-left:10px' >    
                                <?= $form->field($model, 'date')->label(false)->widget(DatePicker::className(),['dateFormat' => 'yyyy-MM-dd',
                                                                                                                'inline' => true,
                                                                                                                'clientOptions' =>[
                                                                                                                    'yearRange' => 'c-5:c+0',
                                                                                                                    'changeMonth'=> true,
                                                                                                                    'changeYear'=> true,  
                                                                                                                ]]) ?>         
                        </div> 
                        <div class='col-md-6'>
                            <?= $form->field($model, 'Produced')->label(false)
                                                         ->dropdownList(Staff::find()->select(['EmployeeName', 'EmployeeId'])
                                                                 ->indexBy('EmployeeId')->column(),['multiple'=>'true','size' => '11'])?>
                        </div>    
                    </div>
                </div> 
                <div class='panel-body'>
                    <div class='row'>
                        <div class='col-md-5' style='margin-left:10px'>
                        <?= $form->field($model, 'ProductId')->label(false)
                                                             ->dropdownList(Catalog::find()->select(['ProductName', 'ProductID'])
                                                             ->indexBy('ProductID')->column(),['prompt'=>'Выберите изделие'])?>
                        </div>
                        <div class='col-md-5'>
                        <?= $form->field($model, 'ColorId')->label(false)
                                                           ->dropdownList(Color::find()->select(['ColorName', 'ColorId'])
                                                           ->indexBy('ColorId')->column(),['prompt'=>'Выберите Цвет']) ?>
                        </div>
                        <div class='col-md-1'>
                        <?= $form->field($model, 'Amount')->label(false)->textInput(['placeholder' => 'Колличество'])?>
                        </div>
                    </div>    
                </div>    
            </div>            
        </div>
        <div class='modal-footer'>
            <div class='col-md-offset-1 col-lg-11'>
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?> 
                <button type='button' class="btn btn-default" data-dismiss='modal'>Close</button>
            </div> 

          
        </div>
      </div>
      
    </div>
  </div>
</div> 
<?php ActiveForm::end() ?>