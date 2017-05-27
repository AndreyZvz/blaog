<?php /*
Copyright (c) 2014 Trirand Ltd. 
*/
${"GLOBALS"}["cmrfnbtq"]="element";
${"GLOBALS"}["itukdv"]="s";
${"GLOBALS"}["rkjthucrfc"]="code";
${"GLOBALS"}["mgblsppo"]="value";
${"GLOBALS"}["ertylc"]="option";class jqCalendar{public$version='4.6.0';private$coptions=array("disabled"=>false,"dateFormat"=>"yy-mm-dd");public$buttonIcon=false;public$buttonOnly=false;public$fontsize='75%';function __construct(){return true;}public function getOption($option){${"GLOBALS"}["ebsfap"]="option";if(array_key_exists(${${"GLOBALS"}["ertylc"]},$this->coptions))return$this->coptions[${${"GLOBALS"}["ebsfap"]}];else return false;}public function setOption($option,$value=null){if(isset(${${"GLOBALS"}["ertylc"]})){$bxwnccq="option";
${"GLOBALS"}["vpztln"]="value";if(is_array(${$bxwnccq})){$tmdlgdw="key";
${"GLOBALS"}["ihfyflsl"]="value";foreach(${${"GLOBALS"}["ertylc"]} as${$tmdlgdw}=>${${"GLOBALS"}["ihfyflsl"]}){${"GLOBALS"}["orvyvbhl"]="key";
$this->coptions[${${"GLOBALS"}["orvyvbhl"]}]=${${"GLOBALS"}["mgblsppo"]};}return true;}else if(${${"GLOBALS"}["vpztln"]}!=null){$ywyxayfds="value";
$this->coptions[${${"GLOBALS"}["ertylc"]}]=${$ywyxayfds};return true;}}return false;}public function setEvent($event,$code){${"GLOBALS"}["wfktrhcho"]="event";
${"GLOBALS"}["zjeufwkeg"]="code";if(isset(${${"GLOBALS"}["wfktrhcho"]})&&isset(${${"GLOBALS"}["zjeufwkeg"]})){$weftzirpxd="event";
$this->coptions[${$weftzirpxd}]="js:".${${"GLOBALS"}["rkjthucrfc"]};}}public function renderCalendar($element,$script=true,$echo=true){$shngqptdhxdm="script";
${"GLOBALS"}["khjdug"]="s";
$itanbuwdc="echo";
$kgbsymmfyz="script";
${${"GLOBALS"}["itukdv"]}="";
$qmyckeo="s";if(${$shngqptdhxdm}){${${"GLOBALS"}["itukdv"]}.="<script type='text/javascript'>";
${${"GLOBALS"}["itukdv"]}.="jQuery(document).ready(function()  {";}${"GLOBALS"}["efmxdqyek"]="s";
${$qmyckeo}.="if(jQuery.ui) {  if(jQuery.ui.datepicker)  {  ";if($this->buttonIcon||$this->buttonOnly){${"GLOBALS"}["igvpbpuh"]="element";
${${"GLOBALS"}["itukdv"]}.="jQuery('".${${"GLOBALS"}["igvpbpuh"]}."').after('<button>Calendar</button>').next()";
${"GLOBALS"}["lstovtbl"]="s";
${${"GLOBALS"}["itukdv"]}.=".button({icons:{primary:  'ui-icon-calendar'}, text:false})";
${${"GLOBALS"}["itukdv"]}.=".css({'font-size':'".$this->fontsize."'})";
${${"GLOBALS"}["lstovtbl"]}.=".click(function(e){jQuery('".${${"GLOBALS"}["cmrfnbtq"]}."').datepicker('show');return false;});";}if($this->buttonOnly){$this->setOption("showOn","button");}${${"GLOBALS"}["khjdug"]}.="jQuery('".${${"GLOBALS"}["cmrfnbtq"]}."').datepicker(".jqGridUtils::encode($this->coptions).");";if($this->buttonOnly){$chwuwvuul="s";
${$chwuwvuul}.="jQuery('.ui-datepicker-trigger').remove();";}${${"GLOBALS"}["itukdv"]}.="jQuery('.ui-datepicker').css({'font-size':'".$this->fontsize."'});";
${${"GLOBALS"}["itukdv"]}.="} }";if(${$kgbsymmfyz})${${"GLOBALS"}["efmxdqyek"]}.=" });</script>";if(${$itanbuwdc}){echo${${"GLOBALS"}["itukdv"]};}else{${"GLOBALS"}["xovqjksethu"]="s";return${${"GLOBALS"}["xovqjksethu"]};}}}
?>
