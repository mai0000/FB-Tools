<?php
set_time_limit(0);
require "../config.php";
require("json.php");
$i = 0;
$ii = 0;
$bigArray = array();
$myurl = array();

if (empty($_GET["id_post"])){
$conjson["status"] = 'error';
$conjson["msg"] = 'กรุณากรอก ID POST ก่อน';
exit(json_encode($conjson));
}elseif (empty($_GET["message"])){
$conjson["status"] = 'error';
$conjson["msg"] = 'กรุณากรอก ข้อความ ก่อน';
exit(json_encode($conjson));
}

foreach($json as $row){
$bigArray = "https://graph.ball-tools.com/?share&id=".$_GET["id_post"]."&text=".urlencode($_GET["message"])."&token=".$row["access_token"];
array_push($myurl,$bigArray);
}

$time = microtime();
$time = explode(" ", $time);
$time = $time[1] + $time[0];
$start = $time;
require("RollingCurl.php");
$rc = new RollingCurl("request_callback");
$rc->window_size = 200;
foreach ($myurl as $url) {
    $request = new RollingCurlRequest($url);
    $rc->add($request);
}
$rc->execute();
function request_callback($response, $info) {
global $i;
global $ii;
global $res;

if ($response == 'success') {
$i++;	
}else{
$ii++;
}

}
$time = microtime();
$time = explode(" ", $time);
$time = $time[1] + $time[0];
$finish = $time;
$totaltime = ($finish - $start);
$done = 'ปั้มแชร์เรียบร้อยแล้ว :  ' .$i.'  คน' ;
$conjson["status"] = 'success';
$conjson["msg"] = $done;
exit(json_encode($conjson));
?>
