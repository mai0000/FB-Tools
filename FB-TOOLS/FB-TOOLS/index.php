<?php 
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FB-Tools</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/sweetalert.min.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/smooth.min.js"></script>
  <style type="text/css">
	body
	{
	    background: url(assets/img/background.jpg?v=1.0) no-repeat center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		font-family:"Kanit", sans-serif;
		color: black;
	}
	</style>
</head>
<?php
if(!isset($_SESSION['password'])){
	?>
	<body>
	 <div class="container animated fadeInDown" style="margin-top:200px;">
	  <div align="center">
	   <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	   <div class="card-body col-md-6 border border-dark" style="background: rgba(255,255,255,0.4) !important;">	
	    <h2><center>
	    <p class="text-dark">FB-Tools | Portals.</p>
	    <p class="text-dark"><i class="fa fa-home"></i></p>
	   </center></h2>
	   <hr class="bg-dark">
	   <p>
	   </p>
	   <input type="hidden" name="act" value="">
<?php
	if(isset($_SESSION["password"]))
	{
		echo '<script>location.href="index.php";</script>';
		exit();
	}
	if($_POST){
		$password = $_POST['password'];
			if($password == ""){
				echo '<script>ierror("Password Empty !", "กรุณาใส่รหัสผ่าน");</script>';
			} else{
				if($password == $admin_pass){
					$_SESSION['password'] = $password;
					echo '<script>isuccess("Login Success !!", "เข้าสู่ระบบสำเร็จ");</script>';
				} else{
						echo '<script>ierror("Password Wrong !!", "รหัสผ่านไม่ถูกต้อง");</script>';
					}
				}
			}
?>
	   <form method="post" class="form-signin" name="mainform" role="form">
	   <label for="password" class="text-dark float-left"><i class="fa fa-lock"></i> Password :</label>
        <div class="input-group">
        <input class="form-control" style="height: 40px;" name="password" id="password" type="password" placeholder="รหัสผ่าน">
        </div>
    <br>
        <button class="btn btn-outline-dark btn-block" type="submit" onClick="mainform.act.value='login';mainform.submit();"><i class="fas fa-sign-in-alt"></i> Sign in</button>
    </form>
   </div>
  </div>
</div>
	<footer class="animated fadeInUp" style="position: relative;">
	 <div class="text-center text-dark" style="padding:9px;">
      <div class="text-center" style="font-family: Kanit; color: white;">Copyright © 2018 <?php echo $footer ?> All rights reserved.</div>
	 </div>
   </footer>
 </body>
</html>
<body>
	<?php
	exit();
} else{
}
set_time_limit(0);
function json($filename){
$json = array();
$token = file_get_contents($filename);
$arr = explode(PHP_EOL,$token);
echo $arr["data"]["access_token"];
foreach ($arr as $row){
	$ro = str_replace(' ','',$row);
	if (!empty($ro)){
		$json["data"][]["access_token"] = $row;
	}
}
return json_encode($json);
}
?>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top transparency animated fadeInDown" style="background: rgba(0,0,0,0.4) !important;">
            <div class="container"><a class="navbar-brand" href="."><i class="fas fa-home fa-2x animated flash" style="font-size:20px;"></i>&nbsp;FB-Tools</a><button class="navbar-toggler fa fa-list text-success" data-toggle="collapse" data-target="#navcol-1"><span></span><span></span><span></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item <?php if (@$_GET["page"] == 'autolike') { echo 'active' ;} ?>"><a class="nav-link" href="?page=autolike"><i class="fas fa-thumbs-up animated flash"></i>&nbsp;ปั้มไลค์</a></li>
					<li class="nav-item <?php if (@$_GET["page"] == 'addfollow') { echo 'active' ;} ?>"><a class="nav-link" href="?page=addfollow"><i class="fas fa-star animated flash"></i>&nbsp;ปั้มผู้ติดตาม</a></li>
					<li class="nav-item <?php if (@$_GET["page"] == 'addfriend') { echo 'active' ;} ?>"><a class="nav-link" href="?page=addfriend"><i class="fas fa-user-friends animated flash"></i>&nbsp;ปั้มเพื่อน</a></li>
                    <li class="nav-item <?php if (@$_GET["page"] == 'botcomment') { echo 'active' ;} ?>"><a class="nav-link" href="?page=botcomment"><i class="fas fa-comments animated flash"></i>&nbsp;ปั้มคอมเม้นต์</a></li>
                    <li class="nav-item <?php if (@$_GET["page"] == 'addgroup') { echo 'active' ;} ?>"><a class="nav-link" href="?page=addgroup"><i class="fas fa-user-plus animated flash"></i>&nbsp;ปั้มคนเข้ากลุ่ม</a></li>
					<li class="nav-item <?php if (@$_GET["page"] == 'autoshare') { echo 'active' ;} ?>"><a class="nav-link" href="?page=autoshare"><i class="fas fa-share animated flash"></i>&nbsp;ปั้มแชร์</a></li>
					<li class="nav-item <?php if (@$_GET["page"] == 'profile') { echo 'active' ;} ?>"><a class="nav-link" href="?page=profile"><i class="fas fa-shield-alt animated flash"></i>&nbsp;เปิดโล่</a></li>
					<li class="nav-item <?php if (@$_GET["page"] == 'addtoken') { echo 'active' ;} ?>"><a class="nav-link" href="?page=addtoken">&nbsp;<i class="fas fa-plus animated flash"></i>&nbsp;เพิ่มโทเคน</a></li>
					<li class="nav-item"><a class="nav-link btn-danger text-light" href="?page=logout"><i class="fas fa-sign-out-alt animated flash"></i>&nbsp;Logout</a></li>
              </ul>
        </div>
    </nav>
	<?php
		@$json_token =  json_decode(json($file_token),TRUE);
		@$json = $json_token['data'];
		@$count["token"] = count($json);
		if($count["token"] == NULL) {
			if(@$_GET["page"] !== 'addtoken') {
			echo "<script>iempty('Token Empty','คุณต้องไปเพิ่มโทเคนก่อน<br>ถึงจะใช้งานเว็บได้ !!')</script>";
			}
		}
	?>
    <div class="container animated fadeInUp" style="margin-top:200px;">
	<div class="border border-dark">
	<?php
	if (@$_GET["page"] == ''){ $header = "Access Token"; }
	elseif (@$_GET["page"] == 'autolike'){ $header = "System Like"; }
	elseif (@$_GET["page"] == 'addfriend'){ $header = "System Friend"; }
	elseif (@$_GET["page"] == 'addfollow'){ $header = "System Follow"; }
	elseif (@$_GET["page"] == 'botcomment'){ $header = "System Comment"; }
	elseif (@$_GET["page"] == 'addgroup'){ $header = "System Group"; }
	elseif (@$_GET["page"] == 'autoshare'){ $header = "System Share"; }
	elseif (@$_GET["page"] == 'profile'){ $header = "System Shield"; }
	elseif (@$_GET["page"] == 'addtoken'){ $header = "Add Token"; }
	elseif (@$_GET["page"] == 'check_access_token'){ $header = "Checking Token"; }
	elseif (@$_GET["page"] == 'logout'){ $header = "กำลังออกจากระบบ"; }
	else
	{
		$header = "Error 404";
	}
	?>
	<div class="card-header" style="color:white; background: rgba(0,0,0,0.7) !important;"><h3><i class="fab fa-facebook"></i>&nbsp;<?php echo $header; ?></h3></div>
	<div class="card-body col-12" style="background: rgba(255,255,255,0.4) !important;">	
	<center>
	<?php 
	if (isset($_GET["page"])){
		if (@$_GET["page"] == 'autolike'){
			include "page/autolike.php"; 
		}elseif (@$_GET["page"] == 'addfollow'){
			include "page/addfollow.php"; 
		}elseif (@$_GET["page"] == 'addfriend'){
			include "page/addfriend.php"; 
		}elseif (@$_GET["page"] == 'botcomment'){
			include "page/botcomment.php"; 
		}elseif (@$_GET["page"] == 'addgroup'){
		include "page/addgroup.php"; 
		}elseif (@$_GET["page"] == 'autoshare'){
		include "page/autoshare.php"; 
		}elseif (@$_GET["page"] == 'addtoken'){
		include "page/addtoken.php"; 
		}elseif (@$_GET["page"] == 'profile'){
		include "page/profile.php"; 
		}elseif (@$_GET["page"] == 'check_access_token'){
			include "page/token.php";
		}elseif (@$_GET["page"] == 'logout'){
				session_destroy();
				echo "<script>isuccess('Logout Success', 'ออกจากระบบสำเร็จ !!');</script>"; 
		}
	}else{
		include "page/index.php";
	}
	?>
	<br>
	</center>
	</div>
	</div>
	</div>
	<footer class="animated fadeInUp" style="position: relative;">
	 <div class="text-center text-dark" style="padding:9px;">
      <div class="text-center" style="font-family: Kanit; color: white;">Copyright © 2018 <?php echo $footer ?> All rights reserved.</div>
	 </div>
   </footer>
</body>
</html>