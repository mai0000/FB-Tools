<?php
function json($filename){
$json = array();
$token = file_get_contents($filename);
$arr = explode(PHP_EOL,$token);
foreach ($arr as $row){
	$ro = str_replace(' ','',$row);
	if (!empty($ro)){
		$json["data"][]["access_token"] = $row;
	}
}
return json_encode($json);
}
$json_token =  json_decode(json('../'.$file_token),TRUE);
$json = $json_token['data'];
?>