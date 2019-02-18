<?php
/* FB-Tools by https://www.facebook.com/setthawut.ball */
/* FB-Tools by https://www.facebook.com/itorkungth */
$config = array(
"limit_friend"=>"2000", //จำกัดจำนวนเพื่อนที่เพิ่มลงกลุ่ม
);

$url = "localhost/";
$admin_pass = "14123";
$file_token = 'dist/token.txt';
$footer = "BALL-TOOLS.COM POWER BY ITORKUNGz";



// NOT EDIT THIS =>
function curl($url){ 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$pro = curl_exec($ch);
curl_close($ch);
return $pro;
}

// NOT EDIT THIS =<
?>