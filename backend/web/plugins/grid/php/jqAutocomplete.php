<?php /*
Copyright (c) 2014 Trirand Ltd. 
*/
${"GLOBALS"}["\x65\x75t\x79\x79\x75v"]="ec\x68\x6f";${"GLO\x42ALS"}["\x74\x6c\x65i\x6f\x67m\x6cn"]="\x73\x63\x72i\x70\x74";${"GLO\x42ALS"}["\x6a\x6e\x72x\x7a\x69\x64"]="t\x72\x67";${"GLO\x42ALS"}["bx\x63uk\x64\x76\x77\x72"]="t\x61\x72g\x65\x74";${"GLOBALS"}["d\x75a\x73\x73d\x73\x74\x70h\x66\x64"]="s";${"GLO\x42ALS"}["\x6b\x6a\x63\x69g\x6d"]="\x65l\x65m\x65\x6e\x74";${"GLO\x42ALS"}["f\x65\x65\x66\x78\x78\x76\x74\x69"]="r\x6f\x77";${"GLO\x42ALS"}["\x64uy\x6a\x78oz\x67\x70"]="\x66\x69\x65\x6cd\x6e\x61\x6des";${"GLO\x42ALS"}["\x70jiu\x6bu\x74vq\x77\x74"]="\x72\x65\x73\x5fa\x72r";${"GLO\x42ALS"}["\x64oeot\x79o"]="\x6ecol\x73";${"GLOBALS"}["\x61o\x69d\x6ew\x73\x69\x6e\x6b\x77"]="s\x71\x6c\x31";${"GLOBALS"}["\x66\x65ewl\x70\x79z\x67\x6ez\x6f"]="\x73\x71\x6cC\x6d\x64";${"GLOBALS"}["c\x6b\x79u\x76v\x62j\x66\x6e"]="or\x64\x65r";${"GLO\x42ALS"}["\x78\x68\x63\x61\x73\x61mw"]="po\x73\x32";${"GLOBALS"}["v\x6b\x68\x6d\x63c\x75t"]="\x70\x6f\x73";${"GLO\x42ALS"}["\x7a\x72\x6b\x64xf\x66"]="\x6d\x61tc\x68\x65\x73";${"GLO\x42ALS"}["k\x74\x62q\x76c\x78w\x77c"]="a\x64\x6fd\x62\x6ci\x6di\x74";${"GLOBALS"}["\x74\x6adjh\x6e\x66\x7a"]="\x69";${"GLO\x42ALS"}["\x61\x73u\x7ag\x6a\x73j"]="p\x61ram\x73";${"GLOBALS"}["\x7a\x73f\x6b\x77\x66eq\x68d\x74f"]="\x70r\x6dl\x65\x6e";${"GLO\x42ALS"}["gj\x6d\x6fgp\x75\x65"]="\x72esu\x6ct";${"GLOBALS"}["n\x63\x64\x69\x6c\x62\x6f\x6e\x79\x65q\x62"]="n\x75\x6d";${"GLO\x42ALS"}["\x62\x73l\x6a\x61m\x72\x73\x6e\x70\x6f\x6b"]="\x72\x65\x73";${"GLOBALS"}["bo\x71\x71\x72\x76bu\x75"]="ac\x63a\x63\x68e";${"GLOBALS"}["ra\x6d\x70tb\x76\x68\x78\x71"]="\x61cn\x6f\x63\x61c\x68\x65";${"GLO\x42ALS"}["x\x6e\x74\x6fv\x6a\x69h\x76"]="cod\x65";${"GLO\x42ALS"}["\x76\x6bo\x79j\x63\x6e\x6c"]="\x6f\x70\x74\x69o\x6e";${"GLOBALS"}["p\x75\x62\x6f\x73\x76\x7a\x6c\x64\x68a"]="\x6fdb\x63\x74\x79\x70\x65";${"GLOBALS"}["\x72n\x6a\x68\x65pyx\x73\x64r\x64"]="i\x6e\x74\x65\x72f\x61ce";class jqAutocomplete{public$version='4.6.0';protected$aoptions=array("appendTo"=>"body","disabled"=>false,"delay"=>300,"minLength"=>1,"source"=>null);protected$conn=null;protected$dbtype='';protected$source;protected$element;protected$itemLength=10;protected$runAll=true;protected$term='';protected$cachearray="cache";public$cache=false;public$SelectCommand='';public$searchType="startWith";public$loadAll=false;public$ajaxtype="GET";public$scroll=false;public$height="110px";public$encoding="utf-8";public$fontsize='11px';public$strictcheck=true;public function isNotACQuery(){return$this->runAll;}function __construct($db=null,$odbctype=''){${"GLO\x42ALS"}["\x62\x72\x75\x69\x62z\x6f\x75o\x62\x73"]="\x69\x6e\x74\x65\x72\x66\x61c\x65";${"GLOBALS"}["i\x7a\x6c\x65\x68\x62\x66\x71"]="\x64\x62";if(class_exists("\x6a\x71Gri\x64DB"))${${"GLOBALS"}["rn\x6a\x68e\x70y\x78s\x64\x72\x64"]}=jqGridDB::getInterface();else${${"GLO\x42ALS"}["\x62ruib\x7ao\x75\x6fb\x73"]}="\x6c\x6fc\x61\x6c";$this->conn=${${"GLO\x42ALS"}["\x69\x7al\x65\x68\x62\x66\x71"]};if(${${"GLO\x42ALS"}["\x72\x6e\x6ahe\x70\x79\x78\x73dr\x64"]}=="\x70d\x6f"){$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);$this->dbtype=$this->conn->getAttribute(PDO::ATTR_DRIVER_NAME);}else{$this->dbtype=${${"GLO\x42ALS"}["r\x6e\x6a\x68\x65\x70y\x78\x73d\x72\x64"]}.${${"GLO\x42ALS"}["\x70u\x62o\x73\x76zl\x64h\x61"]};}$this->term=jqGridUtils::GetParam("\x74\x65\x72m",-1);if($this->term!==-1)$this->runAll=false;$this->element=jqGridUtils::GetParam("a\x63e\x6c\x65m","");}public function getOption($option){${"GLOBALS"}["\x63\x68\x6c\x79\x67\x75f\x73\x6d"]="\x6f\x70ti\x6fn";if(array_key_exists(${${"GLO\x42ALS"}["\x76\x6bo\x79\x6a\x63\x6e\x6c"]},$this->aoptions))return$this->aoptions[${${"GLOBALS"}["\x63h\x6c\x79\x67\x75\x66\x73m"]}];else return false;}public function setOption($option,$value=null){if(!$this->runAll)return false;if(isset(${${"GLO\x42ALS"}["\x76\x6b\x6f\x79\x6a\x63\x6el"]})){${"GLO\x42ALS"}["\x67\x6ea\x72\x73v\x62"]="o\x70\x74\x69o\x6e";${"GLO\x42ALS"}["mf\x6a\x77i\x73\x74\x79"]="va\x6c\x75\x65";if(is_array(${${"GLO\x42ALS"}["g\x6e\x61r\x73\x76b"]})){$ypjytlidh="\x76a\x6c\x75e";${"GLO\x42ALS"}["v\x79\x6ep\x6cfs\x69g\x64"]="k\x65\x79";foreach(${${"GLOBALS"}["\x76ko\x79j\x63\x6el"]} as${${"GLO\x42ALS"}["\x76y\x6ep\x6c\x66\x73i\x67d"]}=>${$ypjytlidh}){${"GLOBALS"}["mnm\x6b\x6d\x65w"]="\x6b\x65\x79";$ejgdnqukedx="\x76\x61\x6cu\x65";$this->aoptions[${${"GLO\x42ALS"}["\x6d\x6e\x6d\x6b\x6dew"]}]=${$ejgdnqukedx};}return true;}else if(${${"GLO\x42ALS"}["m\x66\x6aw\x69s\x74y"]}!=null){${"GLO\x42ALS"}["\x6aw\x6ec\x6a\x6boe"]="\x76\x61l\x75\x65";$this->aoptions[${${"GLOBALS"}["\x76\x6b\x6f\x79\x6a\x63\x6e\x6c"]}]=${${"GLO\x42ALS"}["\x6a\x77n\x63\x6a\x6bo\x65"]};}return true;}return false;}public function setEvent($event,$code){if($this->runAll){${"GLO\x42ALS"}["l\x7ay\x67w\x64gb\x68d\x6e"]="\x65v\x65\x6e\x74";$this->aoptions[${${"GLO\x42ALS"}["l\x7ay\x67\x77dg\x62hdn"]}]="\x6as:".${${"GLOBALS"}["\x78\x6etovji\x68v"]};}}public function setSource($source){if(!$this->runAll)return false;${"GLO\x42ALS"}["\x77\x76\x6f\x67\x6bi"]="\x73\x6f\x75\x72\x63e";$this->source=${${"GLO\x42ALS"}["w\x76o\x67k\x69"]};}private function _setSrc($element){if(is_string($this->source)){${"GLO\x42ALS"}["\x67q\x65\x79\x66\x71\x71"]="\x61\x63\x63a\x63\x68\x65";if($this->cache){$this->cachearray.=rand(0,10000);}${${"GLO\x42ALS"}["g\x71\x65y\x66\x71\x71"]}="func\x74\x69o\x6e (re\x71u\x65\x73\x74,\x20\x72es\x70o\x6es\x65)\n{\n\t\x72e\x71u\x65\x73\x74\x2eac\x65le\x6d = '$element\x27\x3b\n\t\x72e\x71\x75es\x74.\x6f\x70er = '\x61\x75\x74o\x63\x6dpl';\n\t\x69f\x20(\x20requ\x65s\x74\x2ete\x72m\x20\x69n $this->cachearray\x20)\n\t{\n\t\tresp\x6f\x6e\x73e( $this->cachearray[\x20re\x71\x75\x65st\x2e\x74\x65r\x6d\x20]\x20);\n\t\t\x72\x65\x74u\x72n\x3b\n\t}\n\t\$.aja\x78({\n\t\t\x75\x72\x6c:\x20\"$this->source\",\n\t\tdataT\x79\x70\x65: \x22j\x73\x6fn\",\n\t\t\x64a\x74a:\x20re\x71u\x65\x73t,\n\t\t\x74\x79pe: \x22$this->ajaxtype\",\n\t\t\x65\x72\x72or:\x20\x66un\x63\x74io\x6e(r\x65s,\x20\x73\x74a\x74\x75\x73) {\n\t\t\ta\x6c\x65\x72t(\x72\x65\x73\x2e\x73\x74at\x75\x73+\x22\x20:\x20\x22+re\x73\x2e\x73\x74\x61tus\x54e\x78\x74+\".\x20S\x74a\x74\x75s:\x20\x22+sta\x74\x75s)\x3b\n\t\t},\n\t\t\x73u\x63\x63\x65\x73s: f\x75ncti\x6f\x6e( \x64ata\x20) {\n\t\t\t\x69f(da\x74a)\x20{\n\t\t\t\t$this->cachearray[\x20r\x65\x71u\x65st.\x74\x65rm\x20] =\x20d\x61\x74a\x3b\n\t\t\t\t\x72esp\x6f\x6e\x73e(\x20data )\x3b\n\t\t\t}\n\t\t}\n\t})\x3b\n}";${"GLO\x42ALS"}["tn\x73choae\x78"]="\x72e\x73";${${"GLO\x42ALS"}["\x72\x61\x6dp\x74b\x76h\x78q"]}="f\x75\x6ec\x74\x69on (request, \x72esp\x6fns\x65)\n{\n\t\x72\x65q\x75\x65s\x74.a\x63el\x65\x6d\x20=\x20'$element\x27;\n\trequ\x65\x73t.\x6fp\x65r \x3d\x20'au\x74\x6fcm\x70l\x27;\n\t\$.a\x6aax({\n\t\t\x75rl: \x22$this->source\",\n\t\t\x64\x61\x74a\x54\x79\x70e:\x20\x22jso\x6e\x22,\n\t\t\x64a\x74\x61: reque\x73t,\n\t\t\x74y\x70e: \x22$this->ajaxtype\",\n\t\t\x65r\x72\x6fr:\x20func\x74\x69on(r\x65\x73,\x20\x73\x74\x61t\x75s) {\n\t\t\t\x61\x6c\x65r\x74(\x72e\x73\x2es\x74\x61tus+\"\x20: \x22+r\x65\x73\x2esta\x74\x75sTex\x74+\"\x2e\x20S\x74\x61tus: \"+\x73t\x61t\x75s)\x3b\n\t\t},\n\t\t\x73\x75\x63\x63e\x73\x73:\x20f\x75\x6e\x63\x74i\x6fn( \x64a\x74a )\x20{\n\t\t\t\x72\x65s\x70o\x6e\x73\x65(\x20\x64a\x74a )\x3b\n\t\t}\n\t});\n}";if($this->cache){${"GLO\x42ALS"}["\x6d\x71\x61\x78\x65\x70g\x79\x75w"]="\x72e\x73";${${"GLO\x42ALS"}["mq\x61\x78\x65\x70g\x79\x75\x77"]}="\x6a\x73:".${${"GLO\x42ALS"}["\x62\x6f\x71\x71\x72\x76b\x75\x75"]};}else if($this->loadAll){$rwqvql="r\x65\x73";${$rwqvql}=$this->getACData();}else{${${"GLOBALS"}["\x62\x73\x6c\x6aa\x6d\x72\x73\x6ep\x6f\x6b"]}="j\x73:".${${"GLO\x42ALS"}["\x72\x61mp\x74\x62v\x68x\x71"]};}$this->setOption("source",${${"GLO\x42ALS"}["\x74\x6es\x63\x68o\x61\x65x"]});}else if(is_array($this->source)){$this->setOption("\x73\x6f\x75rce",$this->source);}}public function setLength($num){$yzbosni="n\x75\x6d";if(is_int(${${"GLO\x42ALS"}["nc\x64il\x62\x6f\x6ey\x65\x71\x62"]})&&${${"GLO\x42ALS"}["\x6e\x63\x64i\x6c\x62\x6f\x6e\x79e\x71\x62"]}>0){${"GLO\x42ALS"}["v\x73s\x68w\x6f\x64\x76"]="n\x75\x6d";$this->itemLength=${${"GLO\x42ALS"}["vss\x68\x77\x6f\x64\x76"]};}else if(is_bool(${$yzbosni})){$this->itemLength=-1;$this->loadAll=true;}}public function queryAutocomplete(){return$this->getACData();}private function getACData(){${${"GLO\x42ALS"}["\x67\x6a\x6d\x6f\x67\x70\x75\x65"]}=array();if(strlen($this->SelectCommand)>0){${"GLOBALS"}["gl\x6c\x6e\x67w\x76\x6e"]="\x61do\x64\x62\x6c\x69mit";$vugtuolhglbp="pr\x6dlen";${$vugtuolhglbp}=substr_count($this->SelectCommand,"?");$iiooohcvjcn="\x73\x71\x6c\x31";$lvstfouyfj="\x72\x6f\x77";$aarkpuhplv="a\x64\x6f\x64\x62l\x69\x6d\x69\x74";if(${${"GLO\x42ALS"}["z\x73\x66k\x77\x66\x65qhd\x74\x66"]}>0){${${"GLO\x42ALS"}["\x61\x73\x75\x7a\x67j\x73\x6a"]}=array();$iewckqwrukk="\x69";if(strtolower($this->encoding)!="utf-8"){$this->term=iconv("\x75tf-\x38",$this->encoding."//\x54\x52ANSLI\x54",$this->term);}for(${${"GLO\x42ALS"}["tj\x64j\x68\x6ef\x7a"]}=1;${${"GLOBALS"}["\x74\x6ad\x6a\x68n\x66\x7a"]}<=${${"GLO\x42ALS"}["\x7as\x66\x6b\x77\x66\x65qh\x64tf"]};${$iewckqwrukk}++){$ezhomxx="\x70\x61\x72\x61m\x73";switch($this->searchType){case"st\x61rt\x57\x69th":array_push(${${"GLO\x42ALS"}["\x61\x73\x75zgj\x73\x6a"]},$this->term."%");break;case"\x63\x6fntain":array_push(${${"GLOBALS"}["a\x73u\x7ag\x6a\x73\x6a"]},"\x25".$this->term."\x25");break;case"\x65\x6edWi\x74\x68":array_push(${${"GLO\x42ALS"}["as\x75\x7a\x67j\x73\x6a"]},"%".$this->term);break;default:array_push(${$ezhomxx},$this->term);break;}}}else{$bunwrxqy="\x70a\x72a\x6ds";${$bunwrxqy}=null;}${${"GLO\x42ALS"}["\x67\x6cl\x6eg\x77\x76\x6e"]}=false;if($this->itemLength>0&&!$this->loadAll){if($this->dbtype=="\x61dod\x62"){${"GLO\x42ALS"}["xg\x74\x6c\x6b\x72\x66\x66"]="sq\x6c1";${${"GLOBALS"}["x\x67tl\x6b\x72ff"]}=jqGridDB::limit($this->conn,$this->SelectCommand,$this->itemLength,0,${${"GLOBALS"}["\x61\x73u\x7agj\x73j"]});${${"GLOBALS"}["\x6bt\x62\x71v\x63\x78w\x77\x63"]}=true;}else{$eoxbavtkabqy="o\x72d\x65\x72";${$eoxbavtkabqy}="";$chinbdss="\x6f\x72d\x65\x72";if($this->dbtype=="s\x71lsrv"||$this->dbtype=="\x6f\x64\x62\x63sql\x73\x72\x76"){if(preg_match("/\\s+O\x52\x44ER\\\x73+B\x59\x5c\x73+/\x69s",$this->SelectCommand,${${"GLO\x42ALS"}["\x7a\x72\x6b\x64\x78f\x66"]})){${${"GLO\x42ALS"}["v\x6bh\x6d\x63c\x75\x74"]}=strpos(strtoupper($this->SelectCommand),${${"GLO\x42ALS"}["\x7a\x72\x6b\x64\x78\x66f"]}[0]);if(${${"GLOBALS"}["v\x6b\x68\x6d\x63cut"]}!==false){${${"GLO\x42ALS"}["\x78h\x63\x61\x73a\x6d\x77"]}=${${"GLO\x42ALS"}["\x76\x6bh\x6d\x63\x63\x75t"]}+strlen(${${"GLOBALS"}["\x7ar\x6b\x64\x78\x66\x66"]}[0]);${${"GLOBALS"}["\x63\x6byuvvbjf\x6e"]}=trim(substr($this->SelectCommand,${${"GLO\x42ALS"}["\x78h\x63as\x61\x6d\x77"]}));$this->SelectCommand=trim(substr($this->SelectCommand,0,${${"GLO\x42ALS"}["\x76\x6bh\x6d\x63cut"]}));}}}${${"GLO\x42ALS"}["\x66\x65e\x77l\x70\x79\x7ag\x6e\x7ao"]}=jqGridDB::limit($this->SelectCommand,$this->dbtype,$this->itemLength,0,${$chinbdss});}}else{${${"GLOBALS"}["\x66\x65\x65\x77lp\x79zgn\x7ao"]}=$this->SelectCommand;}if(!${$aarkpuhplv}){${"GLO\x42ALS"}["\x6c\x79\x6c\x79\x74v\x74"]="\x73q\x6c1";${${"GLO\x42ALS"}["\x6c\x79l\x79t\x76\x74"]}=jqGridDB::prepare($this->conn,${${"GLO\x42ALS"}["\x66\x65\x65\x77lpy\x7a\x67nzo"]},${${"GLO\x42ALS"}["\x61s\x75zgjsj"]},true);if($this->dbtype=="\x61d\x6f\x64\x62"){$gfqsxnnicl="para\x6d\x73";${${"GLO\x42ALS"}["a\x6f\x69d\x6ew\x73\x69\x6e\x6bw"]}=jqGridDB::execute(${${"GLOBALS"}["\x61\x6fi\x64\x6e\x77si\x6ek\x77"]},${$gfqsxnnicl},$this->conn);}else{$ciadtk="re\x74";${$ciadtk}=jqGridDB::execute(${${"GLOBALS"}["a\x6f\x69\x64\x6e\x77\x73\x69\x6ekw"]},${${"GLOBALS"}["a\x73\x75\x7a\x67\x6asj"]},$this->conn);}}${${"GLO\x42ALS"}["\x64\x6fe\x6f\x74\x79\x6f"]}=jqGridDB::columnCount(${${"GLO\x42ALS"}["\x61\x6f\x69d\x6e\x77\x73i\x6e\x6b\x77"]});$lsnbdfgpfc="\x73\x71\x6c1";${${"GLO\x42ALS"}["\x70j\x69\x75\x6butvq\x77t"]}=array();if($this->dbtype=="m\x79\x73\x71l\x69"){$uqkmcmafit="\x69";$kdzfbsuvo="\x66\x69el\x64\x6e\x61m\x65s";${"GLO\x42ALS"}["\x76\x6a\x6d\x73v\x6e\x6a\x68f\x74\x64"]="\x69";${${"GLOBALS"}["d\x75\x79\x6a\x78o\x7a\x67\x70"]}[0]=&${${"GLOBALS"}["\x61\x6fi\x64\x6e\x77s\x69nk\x77"]};for(${$uqkmcmafit}=0;${${"GLOBALS"}["\x76j\x6d\x73\x76n\x6a\x68\x66\x74\x64"]}<${${"GLO\x42ALS"}["\x64\x6f\x65o\x74\x79\x6f"]};${${"GLO\x42ALS"}["t\x6a\x64\x6a\x68\x6ef\x7a"]}++){$googsjjsxb="\x69";${${"GLO\x42ALS"}["\x64u\x79j\x78\x6f\x7a\x67\x70"]}[${${"GLOBALS"}["t\x6a\x64\x6ah\x6ef\x7a"]}+1]=&${${"GLO\x42ALS"}["\x70j\x69u\x6b\x75\x74\x76q\x77t"]}[${$googsjjsxb}];}call_user_func_array("mys\x71\x6c\x69\x5f\x73tm\x74_b\x69nd\x5f\x72\x65s\x75l\x74",${$kdzfbsuvo});}if($this->dbtype=="o\x63\x69\x38"||$this->dbtype=="\x64b2"||$this->dbtype=="\x73\x71\x6c\x73\x72\x76"||$this->dbtype=="\x6fdbc\x73q\x6csrv"){${${"GLO\x42ALS"}["d\x6f\x65\x6f\x74yo"]}--;}while(${$lvstfouyfj}=jqGridDB::fetch_num(${$lsnbdfgpfc},$this->conn)){${"GLOBALS"}["\x6fx\x6d\x7a\x6c\x66\x6bk\x61"]="\x72es_\x61\x72\x72";${"GLOBALS"}["\x66\x78\x67\x70\x67\x6a"]="\x6e\x63\x6f\x6cs";$nqqhdfsz="\x6e\x63ol\x73";$sjksvuogds="\x72\x6fw";if($this->dbtype=="my\x73\x71l\x69")${$sjksvuogds}=${${"GLO\x42ALS"}["\x6f\x78\x6d\x7alf\x6bk\x61"]};if(${${"GLO\x42ALS"}["f\x78\x67p\x67\x6a"]}==1){$kydzmjlgfi="\x72\x65su\x6c\x74";array_push(${$kydzmjlgfi},array("\x76a\x6cue"=>${${"GLO\x42ALS"}["\x66eef\x78\x78\x76ti"]}[0],"la\x62el"=>${${"GLO\x42ALS"}["\x66ee\x66\x78\x78\x76ti"]}[0]));}else if(${$nqqhdfsz}==2){$bbokgv="\x72\x6f\x77";$xjepsnregzt="\x72o\x77";array_push(${${"GLOBALS"}["\x67jm\x6fg\x70\x75e"]},array("va\x6cue"=>${$bbokgv}[0],"\x6c\x61\x62el"=>${$xjepsnregzt}[1]));}else if(${${"GLO\x42ALS"}["\x64\x6f\x65\x6f\x74y\x6f"]}>=3){$vuqdmnywd="\x72\x6f\x77";${"GLOBALS"}["\x63\x6fxrmwi\x71e"]="ro\x77";${"GLOBALS"}["\x78\x78\x70z\x6et\x6cagw"]="r\x65s\x75l\x74";array_push(${${"GLO\x42ALS"}["\x78\x78\x70zntl\x61\x67w"]},array("\x76a\x6cu\x65"=>${${"GLOBALS"}["\x66e\x65\x66\x78\x78\x76t\x69"]}[0],"\x6c\x61\x62e\x6c"=>${$vuqdmnywd}[1],"\x69d"=>${${"GLO\x42ALS"}["\x63\x6f\x78\x72\x6dw\x69\x71\x65"]}[2]));}}jqGridDB::closeCursor(${$iiooohcvjcn});}return${${"GLOBALS"}["g\x6a\x6d\x6fg\x70\x75e"]};}public function renderAutocomplete($element,$target=false,$script=true,$echo=true,$runme=true){${"GLO\x42ALS"}["k\x64i\x6a\x65f\x6dg\x69\x68"]="r\x75\x6e\x6de";if($this->runAll&&${${"GLOBALS"}["\x6bd\x69\x6aef\x6d\x67\x69h"]}){$qjrafyyt="\x73";$ktkoys="s";$okkpeejoprf="\x73\x63\x72\x69\x70\x74";$rutpidlvt="s";$this->_setSrc(${${"GLO\x42ALS"}["\x6b\x6a\x63i\x67m"]});${$rutpidlvt}="";if(${$okkpeejoprf}){${${"GLO\x42ALS"}["\x64ua\x73sd\x73\x74p\x68\x66d"]}.="<scr\x69\x70t\x20\x74y\x70\x65\x3d'\x74\x65x\x74/\x6a\x61vascrip\x74'>";${${"GLO\x42ALS"}["du\x61\x73\x73\x64s\x74\x70\x68\x66\x64"]}.="\x6aQ\x75\x65\x72y(d\x6fc\x75\x6dent)\x2e\x72ea\x64y(\x66u\x6ec\x74\x69\x6fn()\x20{";}if($this->cache){${"GLO\x42ALS"}["\x76xj\x6d\x6et\x75c\x68\x72\x63t"]="s";${${"GLO\x42ALS"}["\x76xj\x6d\x6et\x75\x63\x68\x72\x63\x74"]}.="\x76\x61\x72 $this->cachearray\x20=\x20{}\x3b";}if(${${"GLOBALS"}["\x62\x78c\x75\x6b\x64\x76w\x72"]}){${${"GLO\x42ALS"}["j\x6e\x72x\x7a\x69d"]}="f\x75\x6e\x63ti\x6f\x6e (\x65\x76ent, u\x69)\n{\n\t//\x20c\x68\x61\x6ege \x66unc\x74\x69on t\x6f\x20se\x74\x20t\x61rget \x76\x61l\x75\x65\n\t\x76\x61\x72\x20\x69val;\n\t\x69\x66(\x75\x69\x2eit\x65\x6d) {\n\t\ti\x76a\x6c =\x20u\x69.i\x74\x65m.\x69\x64 ||\x20\x75i\x2ei\x74em\x2ev\x61\x6cu\x65;\n\t}\n\t\x69\x66(\x69\x76a\x6c)\x20{\n\t\t\x6aQu\x65\x72y(\x22$target\x22)\x2e\x76al(\x69va\x6c);\n\t}\x20e\x6c\x73e\x20{\n\t\tjQ\x75e\x72\x79(\"$target\x22).\x76\x61l(\x22\x22);\n\t\tif(\x22$this->strictcheck\"\x20\x3d\x3d \x22\x74\x72\x75\x65\x22){\n\t\tth\x69\x73.v\x61lue \x3d\x20\x22\"\x3b\n\t}\n}\n}";$this->setOption("\x63\x68\x61n\x67e","js:".${${"GLO\x42ALS"}["\x6a\x6e\x72\x78\x7a\x69\x64"]});}${$qjrafyyt}.="\x69f(j\x51uery\x2e\x75\x69) {\x20i\x66(j\x51u\x65ry.\x75i.\x61uto\x63omp\x6cete){";${"GLOBALS"}["\x6cwd\x71\x72\x71j"]="\x73";${${"GLOBALS"}["d\x75\x61\x73\x73\x64s\x74\x70\x68f\x64"]}.="\x6a\x51\x75\x65\x72\x79(\x27".${${"GLO\x42ALS"}["\x6bj\x63\x69g\x6d"]}."').\x61\x75toc\x6f\x6dple\x74e(".jqGridUtils::encode($this->aoptions).");";${$ktkoys}.="\x6aQ\x75\x65r\x79(\x27".${${"GLO\x42ALS"}["\x6b\x6a\x63\x69\x67m"]}."\x27)\x2e\x61uto\x63\x6f\x6d\x70l\x65t\x65(\x27w\x69\x64\x67e\x74\x27).\x63\x73\x73('f\x6fn\x74-\x73\x69\x7ae',\x27".$this->fontsize."')\x3b";if($this->scroll){${${"GLO\x42ALS"}["\x64\x75\x61\x73\x73ds\x74p\x68\x66\x64"]}.="jQ\x75\x65\x72y('".${${"GLO\x42ALS"}["\x6b\x6a\x63\x69\x67\x6d"]}."\x27)\x2e\x61\x75\x74\x6f\x63om\x70le\x74e(\x27w\x69\x64g\x65\x74\x27)\x2ec\x73\x73({\x27\x68e\x69\x67\x68t':\x27$this->height','ov\x65r\x66l\x6fw-\x79':'\x61u\x74\x6f\x27})\x3b";}${${"GLO\x42ALS"}["d\x75a\x73\x73\x64\x73t\x70\x68\x66\x64"]}.="} }";if(${${"GLOBALS"}["\x74l\x65io\x67\x6d\x6c\x6e"]})${${"GLOBALS"}["\x6c\x77\x64\x71\x72\x71\x6a"]}.=" })\x3b</\x73c\x72\x69\x70\x74\x3e";if(${${"GLOBALS"}["\x65\x75\x74y\x79u\x76"]}){$ttjqqsqngp="s";echo${$ttjqqsqngp};}else{${"GLO\x42ALS"}["\x65k\x77\x71\x69\x77\x72\x78\x64\x63\x65\x6b"]="\x73";return${${"GLOBALS"}["e\x6b\x77\x71\x69\x77rx\x64\x63\x65k"]};}}else{if(trim($this->element)===trim(${${"GLO\x42ALS"}["\x6b\x6a\x63\x69gm"]})){header("Content-\x74yp\x65: \x74ex\x74/\x78-js\x6fn\x3b\x63\x68\x61rset\x3d".$this->encoding);if(function_exists("\x6a\x73\x6fn\x5fenc\x6fd\x65")&&strtolower($this->encoding)=="\x75\x74f-\x38"){echo json_encode($this->getACData());}else{echo jqGridUtils::encode($this->getACData());}}}}}
?>