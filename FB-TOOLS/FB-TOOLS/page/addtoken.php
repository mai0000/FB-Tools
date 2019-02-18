<div class="page-header">
<h1><i class="fab fa-facebook"></i>&nbsp;Access Token : <?php echo number_format($count["token"]);?> ตัว</h1></div>
<div class="row" style="margin-top:20px;">
<div class="col-md-6">
    <form method="POST">
    <div class="panel-body">
        <p>
          <textarea style="height:250px;" class="form-control" placeholder="วางโคเทน ได้ที่นี่เลยนะฮะ เช่น 
EAA...
EAAA...
EAAA...
EAAA...
EAAA...
EAAA...
EAAA...
EAAA...
EAAA...
EAAA...
EAAA...
EAAA...
" name="upload_txt"></textarea>
        </p>
        <p>
          <button type="submit" name="sent_txt" class="btn btn-success btn-block btn-lg"><i class="fa fa-upload"></i>&nbsp;เพิ่มโทเคนนน</button>
        </p>
    </form>
    <?php
    if (isset($_POST['sent_txt'])) {
		$sr = str_replace(' ','',$_POST["upload_txt"]);
		$tk .= $sr.PHP_EOL;
		$file = fopen($file_token,"a+");
        $text = $tk;
        fwrite($file, $text."\n");
        fclose($file);
		echo '<script>isuccess("AddToken Success !!", "เพิ่มโทเคน<br>เข้าสู่ระบบสำเร็จ");</script>';
    }
    ?>
	</div>
	</div>
	<div class="col-md-6">
    <form method="POST" enctype="multipart/form-data">
    <div class="panel-body">
        <p>
          <input type="file" name="file_upload" class="form-control" />
        </p>
          <button type="submit" style="margin-top:5px;" class="btn btn-success btn-block btn-lg"><i class="fa fa-upload"></i>&nbsp;อัพโหลดไฟล์</button>
    </form>
    <?php
    if ($_FILES) {
    	$file_name = $_FILES['file_upload'] ['name'];
    	$file_size = ($_FILES['file_upload'] ['size'] / 2048);
    	$file_tmp_name = $_FILES['file_upload'] ['tmp_name'];
    	$file_type = $_FILES['file_upload'] ['type'];
	if ($file_size > 5000){
		exit('<script>ierror("AddToken Error !!", "ขนาดไฟล์ใหญ่เกิน 5MB !!");</script>');
	   }
		if ($file_type != "text/plain"){
			exit('<script>ierror("AddToken Error !!", "กรุณาอัพโหลดไฟล์.txt เท่านั้น");</script>');
			
		}
    	if (copy($file_tmp_name, $file_token)) {
    		echo '<script>isuccess("AddToken Success !!", "อัพโหลดไฟล์<br>เข้าสู่ระบบสำเร็จ");</script>';
    	}else{
    		echo '<script>ierror("AddToken Error !!", "อัพโหลดไฟล์ ไม่สำเร็จ");</script>';
    	}

    }
    if (isset($_POST['download'])) {
		if(!empty($_POST['link_txt'])) {
		$file = fopen($file_token,"a+");
        $text = file_get_contents($_POST['link_txt']);
        fwrite($file, $text);
        fclose($file);
		echo '<script>isuccess("AddToken Success !!", "เพิ่มโทเคน<br>เข้าสู่ระบบสำเร็จ");</script>';
		}
		else{
			echo '<script>ierror("AddToken Error !!", "กรุณาอย่าเว้นช่องว่าง");</script>';
		}
    }
    ?>
	<form method="POST">
	<hr style="margin-top:82px;" class="bg-dark">
			<input style="margin-top:30px;" class="form-control" placeholder="LINK TEXT (https://domain.com/token.txt)" name="link_txt" />
			 <button type="submit" style="margin-top:5px;" class="btn btn-success btn-block btn-lg" name="download"><i class="fa fa-upload"></i>&nbsp;ดาวน์โหลดไฟล์</button>
	</form>
	</div>
	</div>
	</div>
	<button onclick="confirmDelete();" style="margin-top:40px;" class="btn btn-danger btn-lg"><i class="fas fa-trash"></i>&nbsp;ลบโทเคนทั้งหมด</button>
<?php
if(isset($_GET['Confirm'])) {
	file_put_contents($file_token, "");
	echo '<script>idelete("Delete Success !!", "ลบโทเคนทั้งหมด<br>: '.number_format($count["token"]).' ตัว สำเร็จ !!");</script>';
}
?>
