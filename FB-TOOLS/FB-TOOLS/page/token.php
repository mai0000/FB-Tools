<?php
$tk = '';
$bigArray = array();
$myurl = array();
$count = 1;


require("RollingCurl.php");
foreach ($json as $row){
$bigArray = "https://graph.facebook.com/app?access_token=".$row["access_token"];
array_push($myurl,$bigArray);	
}

$myurl = array_unique($myurl);
$rc = new RollingCurl("request_callback");
$rc->window_size = 200;
foreach ($myurl as $url) {
    $request = new RollingCurlRequest($url);
    $rc->add($request);
	flush();
}
$rc->execute();

function request_callback($response, $info) {
	global $tk;
	global $count;
	$test = json_decode($response,true);
	if(isset($test['error'])){
		$token = explode("access_token=", $info['url']);
	}else{
		$token = explode("access_token=", $info['url']);
		$sr = str_replace(' ','',$token['1']);
		$tk .= $sr.PHP_EOL;
		$count++;
	}

}
$strx = $tk;
$myfile = fopen($file_token, "w+") or die("Unable to open file!");
$txt = $strx;
fwrite($myfile, $txt);
fclose($myfile);

echo '<script>location="?check_token";</script>';
?>
