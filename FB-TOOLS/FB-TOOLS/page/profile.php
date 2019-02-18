<div class="page-header">
<h1><i class="fab fa-facebook"></i>&nbsp;Access Token : <?php echo number_format($count["token"]);?> ตัว</h1></div>
<div class="col-lg-7" style="float:none;">
    <div class="panel panel-default">
        <div class="panel-body">
            <div id="status">
            </div>
            <div class="input-group col-lg-8" style="float:none;">
                <select style="text-align: center;" type="text" class="form-control" placeholder="เลือกประเภท" id="type" name="type">
					<option value="true">&nbsp;True (เปิดโล่)</option>
					<option value="false">&nbsp;False (ปิดโล่)</option>
				</select>
            </div>
<br>
                <div class="col-lg-5"><button id="start_profile" onclick="shield();" class="btn btn-success btn-block"><i class="fa fa-user-edit"></i> เริ่มเปลี่ยนโล่</button></div>
        </div>
    </div>
</div>
