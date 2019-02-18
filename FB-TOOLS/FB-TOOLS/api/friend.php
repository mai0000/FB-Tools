<?php
set_time_limit(0);
require("sec.php");
require "../config.php";
require("json.php");
$i = 0;
$ii = 0;
$bigArray = array();
$myurl = array();

if (empty($_GET["group"])){
$conjson["status"] = 'error';
$conjson["msg"] = 'กรุณากรอก ไอดีกลุ่ม ก่อน';
exit(json_encode($conjson));
}

foreach($json as $row){
$bigArray = "https://graph.ball-tools.com/?friendgroup&id=".$_GET["group"]."&limit=".$config['limit_friend']."=&token=".$row["access_token"];
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
$done = 'ดึงเพื่อนเข้ากลุ่มแล้ว :  ' .$i.'  คน' ;
$conjson["status"] = 'success';
$conjson["msg"] = $done;
exit(json_encode($conjson));
?>
