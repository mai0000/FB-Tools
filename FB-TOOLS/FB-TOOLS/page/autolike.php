<div class="page-header">
<h1><i class="fab fa-facebook"></i>&nbsp;Access Token : <?php echo number_format($count["token"]);?> ตัว</h1></div>
<div class="col-lg-7" style="float:none;">
    <div class="panel panel-default">
        <div class="panel-body">
          <div id="status">วิธีใช้งานปั้มอีโมจิ &gt; <a href="https://youtu.be/-k0BoaAGg4s" target="_blank">YOUTUBE</a><br>
          เว็บเช็ค UID FACEBOOK &gt; <a href="https://findmyfbid.com/" target="_blank">findmyfbid.com</a></div>
            <div class="row" style="margin-top:20px;">
            </div>
            <div class="input-group col-lg-8" style="float:none;">
                <input style="text-align: center;" type="text" class="form-control" placeholder="ID Post or Page " id="id_post" value="" name="id_post">
            </div>
            <div class="input-group col-lg-8" style="float:none;">
                <select style="text-align: center;" type="text" class="form-control" placeholder="เลือกประเภท" id="type" name="type">
					<option value="LIKE">&nbsp;LIKE (ไลค์)</option>
					<option value="LOVE">&nbsp;LOVE (รัก)</option>
					<option value="HAHA">&nbsp;HAHA (หัวเราะ)</option>
					<option value="WOW">&nbsp;WOW (ว้าว)</option>
					<option value="SAD">&nbsp;Sad (เสียใจ)</option>
					<option value="ANGRY">&nbsp;Angry (โกธร)</option>
					<option value="random">&nbsp;Random (สุ่ม)</option>
				</select>
            </div>
<br>
          <div class="col-lg-5"><button id="start_like" onclick="autolike();" class="btn btn-success btn-block"><i class="fa fa-thumbs-up"></i> เริ่มปั้มไลค์</button>
          </div>
        </div>
    </div>
</div>
