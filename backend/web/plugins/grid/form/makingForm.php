<?php

include_once '../php/jqUtils.php'; 
include_once '../php/jqForm.php'; 
include_once '../php/jqGridPdo.php'; 

// Create instance 
$makingform = new jqForm('makingform',array('method' => 'post', 'id' => 'makingform'));
// Create the connection 

$conn = new PDO('mysql:host=localhost;dbname=blagostroi_uchet','blagostroi_mysql','Ob8-GBco');
//$conn = new PDO(Yii::$app->components['db']['dsn'],Yii::$app->components['db']['username'],Yii::$app->components['db']['password']);
$conn->query("SET NAMES utf8");
$makingform->setConnection( $conn);
$makingform->setUrl('backend/web/plugins/grid/form/makingForm.php');

$jqformparams = array();

$makingform->table = 'making';
$makingform->setPrimaryKeys('ID');
$makingform->serialKey = true;

$makingform->setColumnLayout('twocolumn');
$makingform->setTableStyles('width:100%;','','');

$makingform->addElement('ID','hidden', array( 'id' => 'makingform_ID'));
$makingform->addElement('ProductID','text', array('label' => 'Изделие', 'id' => 'makingform_ProductID'));
$makingform->addElement('ColorID','text', array('label' => 'Цвет', 'maxlength' => '40', 'style' => 'width:98%;', 'id' => 'makingform_ColorID'));
$elem_4[]=$makingform->createElement('newSubmit','submit', array('value' => 'Submit'));
$elem_4[]=$makingform->createElement('newButton','button', array('value' => 'Close', 'id' => 'close_modal'));
$makingform->addGroup("newGroup",$elem_4, array('style' => 'text-align:right;', 'id' => 'makingform_newGroup'));

$makingform->setAjaxOptions( array('iframe' => false,'forceSync' =>false) );

$makingform->demo = false;

echo $makingform->renderForm($jqformparams);
?>