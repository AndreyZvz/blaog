<?php /*
Copyright (c) 2014 Trirand Ltd. 
*/
${"GLOBALS"}["djpnqqmue"]="pkey_column_name";
${"GLOBALS"}["dzcvprvt"]="primaryKeysResult";
${"GLOBALS"}["ezocfnt"]="result";
${"GLOBALS"}["uljpjwwek"]="column_def";
${"GLOBALS"}["sihjqcwztqs"]="scale";
${"GLOBALS"}["lionndq"]="column_name";
${"GLOBALS"}["qdpftjo"]="conn";
${"GLOBALS"}["ypjycgqwup"]="row";
${"GLOBALS"}["mkwahcryp"]="stmt";
${"GLOBALS"}["zvfgvbq"]="pos";
${"GLOBALS"}["mltrboqnac"]="schemaName";
${"GLOBALS"}["nhtozr"]="res";
${"GLOBALS"}["tlfqlnclmjbo"]="native_type";
${"GLOBALS"}["bwubcnnfm"]="meta";
${"GLOBALS"}["vnbbrylrn"]="type";
${"GLOBALS"}["faweahu"]="len";
${"GLOBALS"}["jpowgeldz"]="t";
${"GLOBALS"}["hokjnechv"]="index";
${"GLOBALS"}["hvqdiwitx"]="rs";
${"GLOBALS"}["dmdadhumn"]="fetchall";
${"GLOBALS"}["ypkguunvemk"]="table";
${"GLOBALS"}["gyhsubh"]="types";
${"GLOBALS"}["bgllibv"]="field";
${"GLOBALS"}["pyhuptu"]="key";
${"GLOBALS"}["vcqirwuogzj"]="ret";
${"GLOBALS"}["xccweidsx"]="sort";
${"GLOBALS"}["keieedsqsgl"]="order";
${"GLOBALS"}["fbptwjbj"]="nrows";
${"GLOBALS"}["mjmqtbc"]="limitStr";
${"GLOBALS"}["vnnmlvkrf"]="offsetStr";
${"GLOBALS"}["kjkvte"]="offset";
${"GLOBALS"}["qxafblgy"]="dbtype";
${"GLOBALS"}["mafidix"]="sqlId";
${"GLOBALS"}["nglybiwqa"]="psql";
${"GLOBALS"}["frmkplfjro"]="i";
${"GLOBALS"}["qjgugsf"]="v";
${"GLOBALS"}["pcdgggjq"]="k";
${"GLOBALS"}["xotzcvsqwlpr"]="params";
${"GLOBALS"}["uqsrytacpe"]="bind";
${"GLOBALS"}["utphfzqbl"]="sql";
${"GLOBALS"}["nclcjvjhd"]="sqlElement";class jqGridDB{public static function getInterface(){return"pdo";}public static function prepare($conn,$sqlElement,$params,$bind=true){${"GLOBALS"}["ymuxuqurclqt"]="conn";if(${${"GLOBALS"}["ymuxuqurclqt"]}&&strlen(${${"GLOBALS"}["nclcjvjhd"]})>0){$imvrgmgptwj="sqlElement";
${"GLOBALS"}["yafplfsi"]="sql";
${${"GLOBALS"}["utphfzqbl"]}=$conn->prepare((string)${$imvrgmgptwj});if(!${${"GLOBALS"}["uqsrytacpe"]})return${${"GLOBALS"}["utphfzqbl"]};if(is_array(${${"GLOBALS"}["xotzcvsqwlpr"]})){if(0!==count(array_diff_key(${${"GLOBALS"}["xotzcvsqwlpr"]},array_keys(array_keys(${${"GLOBALS"}["xotzcvsqwlpr"]}))))){${"GLOBALS"}["lzxnvvtgyw"]="params";foreach(${${"GLOBALS"}["lzxnvvtgyw"]} as${${"GLOBALS"}["pcdgggjq"]}=>${${"GLOBALS"}["qjgugsf"]}){${"GLOBALS"}["nblxnpmojcsp"]="k";
${"GLOBALS"}["dgaczqhkakxs"]="k";if(${${"GLOBALS"}["qjgugsf"]}===NULL)$sql->bindValue(${${"GLOBALS"}["nblxnpmojcsp"]},NULL,PDO::PARAM_NULL);else$sql->bindValue(${${"GLOBALS"}["dgaczqhkakxs"]},${${"GLOBALS"}["qjgugsf"]});}}else{$fpojjejpi="i";
$pqrvxjshpp="params";
$kicnokuwfl="i";for(${$fpojjejpi}=1;
${${"GLOBALS"}["frmkplfjro"]}<=count(${$pqrvxjshpp});
${$kicnokuwfl}++){${"GLOBALS"}["rwurlbwgo"]="params";
${"GLOBALS"}["lucactcdlb"]="i";
$uqmpijsp="i";
$jhxsvrtbobtb="i";
${"GLOBALS"}["hunqhesgf"]="i";if(${${"GLOBALS"}["rwurlbwgo"]}[${$uqmpijsp}-1]===NULL)$sql->bindValue(${${"GLOBALS"}["lucactcdlb"]},NULL,PDO::PARAM_NULL);else$sql->bindValue(${$jhxsvrtbobtb},${${"GLOBALS"}["xotzcvsqwlpr"]}[${${"GLOBALS"}["hunqhesgf"]}-1]);}}}return${${"GLOBALS"}["yafplfsi"]};}return false;}public static function limit($sqlId,$dbtype,$nrows=-1,$offset=-1,$order='',$sort=''){${"GLOBALS"}["fqtoqmowngma"]="offset";
${"GLOBALS"}["gwvyrwebupk"]="nrows";
$fxroyubr="nrows";
${${"GLOBALS"}["nglybiwqa"]}=${${"GLOBALS"}["mafidix"]};
$lvtxkxn="offset";
$tpjutjidt="nrows";
$jilekzg="nrows";
$dzqioigaprh="nrows";
$qebehjym="offsetStr";
${"GLOBALS"}["jcsypx"]="offset";
${"GLOBALS"}["uvhtstcn"]="offset";
${"GLOBALS"}["vaylbwlvhil"]="offset";
$vuvvkvio="nrows";
$htncrogarp="nrows";
$tvsnqtl="offset";
${"GLOBALS"}["mrkytqdjg"]="offset";
$obcbqjnhpb="psql";
${"GLOBALS"}["fjolbyivs"]="offsetStr";
$vbxsqsqfrxks="nrows";switch(${${"GLOBALS"}["qxafblgy"]}){case"mysql":${${"GLOBALS"}["fjolbyivs"]}=(${${"GLOBALS"}["kjkvte"]}>=0)?"$offset, ":"";if(${$tpjutjidt}<0)${$vuvvkvio}="18446744073709551615";
${${"GLOBALS"}["nglybiwqa"]}.=" LIMIT $offsetStr$nrows";break;case"pgsql":${${"GLOBALS"}["vnnmlvkrf"]}=(${${"GLOBALS"}["fqtoqmowngma"]}>=0)?" OFFSET\x20".${${"GLOBALS"}["jcsypx"]}:"";
${${"GLOBALS"}["mjmqtbc"]}=(${$dzqioigaprh}>=0)?"\x20LIMIT\x20".${${"GLOBALS"}["gwvyrwebupk"]}:"";
${${"GLOBALS"}["nglybiwqa"]}.="$limitStr$offsetStr";break;case"sqlite":${$qebehjym}=(${${"GLOBALS"}["kjkvte"]}>=0)?" OFFSET $offset":"";
${${"GLOBALS"}["mjmqtbc"]}=(${$vbxsqsqfrxks}>=0)?"\x20LIMIT\x20$nrows":(${${"GLOBALS"}["uvhtstcn"]}>=0?"\x20LIMIT 999999999":"");
${$obcbqjnhpb}.="$limitStr$offsetStr";break;case"sqlsrv":${${"GLOBALS"}["fbptwjbj"]}=intval(${$fxroyubr});if(${$htncrogarp}<0)return false;
${${"GLOBALS"}["vaylbwlvhil"]}=intval(${${"GLOBALS"}["mrkytqdjg"]});if(${$tvsnqtl}<0)return false;if(${$lvtxkxn}>=0&&${$jilekzg}>0){${"GLOBALS"}["csdnvnczjlpr"]="order";
$yshlycmh="psql";
${"GLOBALS"}["bpuwwonqgd"]="order";if(${${"GLOBALS"}["keieedsqsgl"]}&&strlen(${${"GLOBALS"}["csdnvnczjlpr"]})>0){${"GLOBALS"}["njqmzod"]="order";
$stsyoqcqm="sort";
${${"GLOBALS"}["keieedsqsgl"]}=" ORDER BY ".${${"GLOBALS"}["njqmzod"]}."\x20";if(${$stsyoqcqm}){$otdsqvxunmm="order";
${$otdsqvxunmm}.=${${"GLOBALS"}["xccweidsx"]};}}else{${${"GLOBALS"}["keieedsqsgl"]}="";}${$yshlycmh}="SELECT\x20z2.*\n\t\t\t\t\t\tFROM\x20(\n\t\t\t\t\t\t\tSELECT z1.*,\x20ROW_NUMBER() OVER(".${${"GLOBALS"}["bpuwwonqgd"]}.")\x20AS\x20jqgrid_row \n\t\t\t\t\t\t\t\tFROM (\n\t\t\t\t\t\t\t\t\t".${${"GLOBALS"}["nglybiwqa"]}."\n\t\t\t\t\t\t\t\t) z1\n\t\t\t\t\t\t) z2\n\t\t\t\t\tWHERE\x20z2.jqgrid_row BETWEEN ".(${${"GLOBALS"}["kjkvte"]}+1)."\x20AND\x20".(${${"GLOBALS"}["kjkvte"]}+${${"GLOBALS"}["fbptwjbj"]});}break;}return${${"GLOBALS"}["nglybiwqa"]};}public static function execute($psql,$prm=null){${"GLOBALS"}["ewiamnkb"]="psql";
${"GLOBALS"}["sgpsqef"]="ret";
${${"GLOBALS"}["sgpsqef"]}=false;if(${${"GLOBALS"}["ewiamnkb"]}){${${"GLOBALS"}["vcqirwuogzj"]}=$psql->execute();}return${${"GLOBALS"}["vcqirwuogzj"]};}public static function query($conn,$sql){${"GLOBALS"}["drwfttciv"]="conn";if(${${"GLOBALS"}["drwfttciv"]}&&strlen(${${"GLOBALS"}["utphfzqbl"]})>0){return$conn->query(${${"GLOBALS"}["utphfzqbl"]});}return false;}public static function bindValues($stmt,$binds,$types){${"GLOBALS"}["wxpfptdqrx"]="binds";foreach(${${"GLOBALS"}["wxpfptdqrx"]} as${${"GLOBALS"}["pyhuptu"]}=>${${"GLOBALS"}["bgllibv"]}){$kvwagbnri="field";
$zhfwyohnc="field";
$mhcsvelupylf="field";
${"GLOBALS"}["fgtykpoal"]="key";
${"GLOBALS"}["nwpwgmsgc"]="key";
${"GLOBALS"}["tupdcpk"]="key";
$ldpknaxcmfvt="key";if(${$kvwagbnri}===NULL){$stmt->bindValue(${${"GLOBALS"}["pyhuptu"]}+1,NULL,PDO::PARAM_NULL);continue;}switch(${${"GLOBALS"}["gyhsubh"]}[${${"GLOBALS"}["fgtykpoal"]}]){case"numeric":case"string":case"date":case"time":case"datetime":$stmt->bindValue(${${"GLOBALS"}["pyhuptu"]}+1,${$mhcsvelupylf},PDO::PARAM_STR);break;case"int":$stmt->bindValue(${${"GLOBALS"}["pyhuptu"]}+1,(int)${${"GLOBALS"}["bgllibv"]},PDO::PARAM_INT);break;case"boolean":$stmt->bindValue(${$ldpknaxcmfvt}+1,${${"GLOBALS"}["bgllibv"]},PDO::PARAM_BOOL);break;case"blob":$stmt->bindValue(${${"GLOBALS"}["tupdcpk"]}+1,${${"GLOBALS"}["bgllibv"]},PDO::PARAM_LOB);break;case"custom":$stmt->bindValue(${${"GLOBALS"}["nwpwgmsgc"]}+1,${$zhfwyohnc});break;}}return true;}public static function beginTransaction($conn){return$conn->beginTransaction();}public static function commit($conn){return$conn->commit();}public static function rollBack($conn){return$conn->rollBack();}public static function lastInsertId($conn,$table,$IdCol,$dbtype){${"GLOBALS"}["cmyijdouprt"]="dbtype";if(${${"GLOBALS"}["cmyijdouprt"]}=="pgsql"){$wntfennbip="IdCol";return$conn->lastInsertId(${${"GLOBALS"}["ypkguunvemk"]}."_".${$wntfennbip}."_seq");}else{return$conn->lastInsertId();}}public static function fetch_object($psql,$fetchall,$conn){${"GLOBALS"}["fwxbdqxwc"]="psql";if(${${"GLOBALS"}["fwxbdqxwc"]}){$ylttpzqnt="old";
${"GLOBALS"}["vbhiuxutvk"]="old";
${${"GLOBALS"}["vbhiuxutvk"]}=$conn->getAttribute(PDO::ATTR_CASE);
$conn->setAttribute(PDO::ATTR_CASE,PDO::CASE_NATURAL);
${"GLOBALS"}["hcyijwsmvw"]="ret";if(!${${"GLOBALS"}["dmdadhumn"]}){${${"GLOBALS"}["vcqirwuogzj"]}=$psql->fetch(PDO::FETCH_OBJ);}else{${${"GLOBALS"}["vcqirwuogzj"]}=$psql->fetchAll(PDO::FETCH_OBJ);}$conn->setAttribute(PDO::ATTR_CASE,${$ylttpzqnt});return${${"GLOBALS"}["hcyijwsmvw"]};}return false;}public static function fetch_num($psql){$vcpdxsvtaoxj="psql";if(${$vcpdxsvtaoxj}){return$psql->fetch(PDO::FETCH_NUM);}return false;}public static function fetch_assoc($psql,$conn){if(${${"GLOBALS"}["nglybiwqa"]}){$hkgzzvzdvo="old";
${$hkgzzvzdvo}=$conn->getAttribute(PDO::ATTR_CASE);
$conn->setAttribute(PDO::ATTR_CASE,PDO::CASE_NATURAL);
${"GLOBALS"}["dboxlrid"]="old";
$jpmxowpho="ret";
${${"GLOBALS"}["vcqirwuogzj"]}=$psql->fetch(PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_CASE,${${"GLOBALS"}["dboxlrid"]});return${$jpmxowpho};}return false;}public static function closeCursor($sql){if(${${"GLOBALS"}["utphfzqbl"]})$sql->closeCursor();}public static function columnCount($rs){if(${${"GLOBALS"}["hvqdiwitx"]})return$rs->columnCount();else return 0;}public static function getColumnMeta($index,$sql){${"GLOBALS"}["ljliahwyff"]="sql";if(${${"GLOBALS"}["ljliahwyff"]}&&${${"GLOBALS"}["hokjnechv"]}>=0){$bbllbwyez="index";return$sql->getColumnMeta(${$bbllbwyez});}}public static function MetaType($t,$dbtype){$cekhlwdpil="meta";
${"GLOBALS"}["cdifhppow"]="meta";
${$cekhlwdpil}="numeric";if(is_array(${${"GLOBALS"}["jpowgeldz"]})){$fyorfzgyx="t";
$bluuofevq="t";
$krnaqbdc="len";
${"GLOBALS"}["dfcqsbmigq"]="meta";
${${"GLOBALS"}["faweahu"]}=${${"GLOBALS"}["jpowgeldz"]}["len"];
${"GLOBALS"}["ngwwlkijfxee"]="type";
$zfqxset="meta";
${"GLOBALS"}["mqybwadytjt"]="t";
$kcurpgmyd="type";
$nkvkuolgafc="type";
$xhftdysy="t";
$hnergv="type";
$torsztdy="dbtype";switch(${$torsztdy}){case"pgsql":${${"GLOBALS"}["vnbbrylrn"]}=${$xhftdysy}["native_type"];
${${"GLOBALS"}["dfcqsbmigq"]}=self::MetaPgsql(${$hnergv},${${"GLOBALS"}["faweahu"]});break;case"mysql":${${"GLOBALS"}["vnbbrylrn"]}=isset(${${"GLOBALS"}["mqybwadytjt"]}["native_type"])?${$bluuofevq}["native_type"]:"int";
${$zfqxset}=self::MetaMysql(${$kcurpgmyd},${${"GLOBALS"}["faweahu"]});break;case"sqlite":${${"GLOBALS"}["ngwwlkijfxee"]}=${${"GLOBALS"}["jpowgeldz"]}["sqlite:decl_type"];
${${"GLOBALS"}["bwubcnnfm"]}=self::MetaSqlite(${${"GLOBALS"}["vnbbrylrn"]},${$krnaqbdc});break;case"sqlsrv":${${"GLOBALS"}["vnbbrylrn"]}=${$fyorfzgyx}["sqlsrv:decl_type"];
${${"GLOBALS"}["bwubcnnfm"]}=self::MetaSqlsrv(${$nkvkuolgafc},${${"GLOBALS"}["faweahu"]});break;}}return${${"GLOBALS"}["cdifhppow"]};}protected static function MetaPgsql($native_type,$max_len=-1){switch(strtoupper(${${"GLOBALS"}["tlfqlnclmjbo"]})){case"MONEY":case"INTERVAL":case"CHAR":case"CHARACTER":case"VARCHAR":case"NAME":case"BPCHAR":case"_VARCHAR":case"INET":case"MACADDR":return"string";case"TEXT":return"string";case"IMAGE":case"BLOB":case"BIT":case"VARBIT":case"BYTEA":return"blob";case"BOOL":case"BOOLEAN":return"boolean";case"DATE":return"date";case"TIMESTAMP WITHOUT TIME\x20ZONE":case"TIME":case"DATETIME":case"TIMESTAMP":case"TIMESTAMPTZ":return"datetime";case"SMALLINT":case"BIGINT":case"INTEGER":case"INT8":case"INT4":case"INT2":return"int";case"OID":case"SERIAL":return"int";default:return"numeric";}}protected static function MetaMysql($native_type,$max_length=-1){$lmqinlwgeh="native_type";switch(strtoupper(${$lmqinlwgeh})){case"STRING":case"CHAR":case"VARCHAR":case"TINYBLOB":case"TINYTEXT":case"ENUM":case"VAR_STRING":case"SET":return"string";case"TEXT":case"LONGTEXT":case"MEDIUMTEXT":return"string";case"IMAGE":case"LONGBLOB":case"BLOB":case"MEDIUMBLOB":case"BINARY":return"blob";case"YEAR":case"DATE":return"date";case"TIME":case"DATETIME":case"TIMESTAMP":return"datetime";case"INT":case"INTEGER":case"BIGINT":case"TINYINT":case"MEDIUMINT":case"SMALLINT":case"LONG":return"int";default:return"numeric";}}protected static function MetaSqlite($native_type,$max_length=-1){${"GLOBALS"}["puzggbt"]="native_type";switch(strtoupper(${${"GLOBALS"}["puzggbt"]})){case"STRING":case"CHAR":case"CHARACTER":case"VARCHAR":case"NCHAR":case"NVARCHAR":case"TEXT":case"CLOB":case"VARYING CHARACTER":case"NATIVE\x20CHARACTER":return"string";case"BLOB":return"blob";case"DATE":return"date";case"DATETIME":return"datetime";case"INT":case"INTEGER":case"BIGINT":case"TINYINT":case"MEDIUMINT":case"SMALLINT":case"UNSIGNED\x20BIG\x20INT":case"UNSIGNED":case"INT2":case"INT8":return"int";default:return"numeric";}}protected static function MetaSqlsrv($native_type,$max_length=-1){switch(strtoupper(${${"GLOBALS"}["tlfqlnclmjbo"]})){case"BITINT":case"CHAR":case"DECIMAL":case"MONEY":case"NCHAR":case"NUMERIC":case"NVARCHAR":case"NTEXT":case"SMALLMONEY":case"SQL_VARIANT":case"TEXT":case"TIMESTAMP":case"UNIQUEIDENTIFIER":case"VARCHAR":case"XML":return"string";case"BINARY":case"GEOGRAPHY":case"GEOMETRY":case"IMAGE":case"UDT":case"VARBINARY":return"blob";case"DATETIME":case"DATE":case"DATETIME2":case"DATETIMEOFFSET":case"SMALLDATETIME":case"TIME":return"datetime";case"INT":case"BIT":case"SMALLINT":case"TINYINT":return"int";default:return"numeric";}}public static function getPrimaryKey($table,$conn,$dbtype){${"GLOBALS"}["ugoywhqmxncu"]="table";
$pmbqqub="conn";if(strlen(${${"GLOBALS"}["ugoywhqmxncu"]})>0&&${$pmbqqub}&&strlen(${${"GLOBALS"}["qxafblgy"]})>0){$toxklja="stmt";
${"GLOBALS"}["kclxnve"]="result";
$xcyxitvi="pos";
$dvpehqb="table_name";
${"GLOBALS"}["obsxmrvji"]="stmt";
${"GLOBALS"}["qurroukdlpqc"]="primaryKeysResult";
${"GLOBALS"}["pqykdtdo"]="res";
${"GLOBALS"}["qcexul"]="type_name";
${"GLOBALS"}["gkmapxsbv"]="pkey_column_name";
$dflheej="sql";
$mhdjnax="conn";
${"GLOBALS"}["xztygvzywxh"]="owner";
${"GLOBALS"}["pizknudxm"]="column_position";
$mqbtlgjnn="row";
${"GLOBALS"}["eredebehbb"]="tableOwner";
$qofbatxrue="primaryKeysResult";
$spoksyedv="owner";
$mkvwzic="tableOwner";
${"GLOBALS"}["domkaqfl"]="sql";
${"GLOBALS"}["wonqcdwpm"]="sql";
$iubycihfbq="pos";
${"GLOBALS"}["dpjsqrwcqupi"]="length";
$lmhxstydhiyj="stmt";
${"GLOBALS"}["gmxotsyx"]="pkey_key_seq";
${"GLOBALS"}["cwndowvcc"]="precision";
${"GLOBALS"}["qpjeikfokqwf"]="result";
$ezsjeb="nullable";
$oarkoiw="rs";
$jccqgbgsab="table";
$eqzaattd="sql";
${"GLOBALS"}["nyhyvfdkq"]="pkey_column_name";
$duceod="dbtype";switch(${$duceod}){case"pgsql":${${"GLOBALS"}["wonqcdwpm"]}="select\x20column_name from\x20information_schema.constraint_column_usage where table_name\x20 '".${${"GLOBALS"}["ypkguunvemk"]}."'";
${${"GLOBALS"}["hvqdiwitx"]}=$conn->query(${${"GLOBALS"}["utphfzqbl"]},PDO::FETCH_NUM);if(${${"GLOBALS"}["hvqdiwitx"]}){$fgkfgwc="res";
${$fgkfgwc}=$rs->fetch();self::closeCursor(${${"GLOBALS"}["hvqdiwitx"]});if(${${"GLOBALS"}["nhtozr"]}){return${${"GLOBALS"}["nhtozr"]}[0];}}return false;break;case"mysql":${${"GLOBALS"}["utphfzqbl"]}="select\x20column_name from information_schema.statistics where\x20table_name='".${${"GLOBALS"}["ypkguunvemk"]}."'";
${$oarkoiw}=$conn->query(${${"GLOBALS"}["utphfzqbl"]},PDO::FETCH_NUM);if(${${"GLOBALS"}["hvqdiwitx"]}){$vkvnhusoptde="res";
${"GLOBALS"}["vmyenpon"]="rs";
${${"GLOBALS"}["nhtozr"]}=$rs->fetch();self::closeCursor(${${"GLOBALS"}["vmyenpon"]});if(${$vkvnhusoptde}){${"GLOBALS"}["yjbfvrdicx"]="res";return${${"GLOBALS"}["yjbfvrdicx"]}[0];}}return false;break;case"sqlite":${$xcyxitvi}=strpos(${$jccqgbgsab},".");if(${$iubycihfbq}===false)${${"GLOBALS"}["domkaqfl"]}="PRAGMA table_info($table)";else{${"GLOBALS"}["qbvzlydm"]="sql";
$qtwwkopsg="table";
$lrskjuoks="pos";
${${"GLOBALS"}["mltrboqnac"]}=substr(${${"GLOBALS"}["ypkguunvemk"]},0,${${"GLOBALS"}["zvfgvbq"]});
${$qtwwkopsg}=substr(${${"GLOBALS"}["ypkguunvemk"]},${$lrskjuoks}+1);
${${"GLOBALS"}["qbvzlydm"]}="PRAGMA\x20$schemaName.table_info($table)";}${${"GLOBALS"}["pqykdtdo"]}=false;
${${"GLOBALS"}["mkwahcryp"]}=$conn->query(${${"GLOBALS"}["utphfzqbl"]},PDO::FETCH_ASSOC);if(${${"GLOBALS"}["mkwahcryp"]}){${"GLOBALS"}["pmmmtp"]="stmt";while(${${"GLOBALS"}["ypjycgqwup"]}=$stmt->fetch()){if(${${"GLOBALS"}["ypjycgqwup"]}["pk"]==1){${${"GLOBALS"}["nhtozr"]}=${${"GLOBALS"}["ypjycgqwup"]}["name"];break;}}self::closeCursor(${${"GLOBALS"}["pmmmtp"]});}return${${"GLOBALS"}["nhtozr"]};break;case"sqlsrv":${$dflheej}="exec\x20sp_columns\x20@table_name\x20 '".${${"GLOBALS"}["ypkguunvemk"]}."'";
${$lmhxstydhiyj}=self::query(${${"GLOBALS"}["qdpftjo"]},${${"GLOBALS"}["utphfzqbl"]});if(!${${"GLOBALS"}["mkwahcryp"]}){return false;}${${"GLOBALS"}["kclxnve"]}=array();while(${$mqbtlgjnn}=self::fetch_num(${${"GLOBALS"}["obsxmrvji"]})){$vlfmvff="row";
${"GLOBALS"}["jueltoxdll"]="result";
${${"GLOBALS"}["jueltoxdll"]}[]=${$vlfmvff};}${${"GLOBALS"}["xztygvzywxh"]}=1;
${$dvpehqb}=2;
${${"GLOBALS"}["lionndq"]}=3;
${${"GLOBALS"}["qcexul"]}=5;
${${"GLOBALS"}["cwndowvcc"]}=6;
${${"GLOBALS"}["dpjsqrwcqupi"]}=7;
${${"GLOBALS"}["sihjqcwztqs"]}=8;
${$ezsjeb}=10;
${${"GLOBALS"}["uljpjwwek"]}=12;
${${"GLOBALS"}["pizknudxm"]}=16;if(count(${${"GLOBALS"}["ezocfnt"]})==0){return false;}self::closeCursor(${${"GLOBALS"}["mkwahcryp"]});
${$mkvwzic}=${${"GLOBALS"}["qpjeikfokqwf"]}[0][${$spoksyedv}];
${${"GLOBALS"}["utphfzqbl"]}="exec\x20sp_pkeys\x20@table_owner\x20= ".${${"GLOBALS"}["eredebehbb"]}.", @table_name\x20\x20'".${${"GLOBALS"}["ypkguunvemk"]}."'";
${${"GLOBALS"}["mkwahcryp"]}=self::query(${$mhdjnax},${$eqzaattd});if(${$toxklja}){$xvtkni="primaryKeysResult";
${$xvtkni}=self::fetch_num(${${"GLOBALS"}["mkwahcryp"]});self::closeCursor(${${"GLOBALS"}["mkwahcryp"]});}${${"GLOBALS"}["nyhyvfdkq"]}=3;
${${"GLOBALS"}["gmxotsyx"]}=4;if(${$qofbatxrue}&&${${"GLOBALS"}["dzcvprvt"]}[${${"GLOBALS"}["djpnqqmue"]}])return${${"GLOBALS"}["qurroukdlpqc"]}[${${"GLOBALS"}["gkmapxsbv"]}];return false;break;}}return false;}public static function errorMessage($conn){${"GLOBALS"}["uxbfrt"]="ret";
${${"GLOBALS"}["uxbfrt"]}=$conn->errorInfo();return"Code: ".${${"GLOBALS"}["vcqirwuogzj"]}[1].". ".${${"GLOBALS"}["vcqirwuogzj"]}[2];}}
?>
