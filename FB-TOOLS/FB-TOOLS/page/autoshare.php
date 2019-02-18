<div class="page-header">
<h1><i class="fab fa-facebook"></i>&nbsp;Access Token : <?php echo number_format($count["token"]);?> ตัว</h1></div>
<div class="col-lg-7" style="float:none;">
    <div class="panel panel-default">
        <div class="panel-body">
            <div id="status">
            </div>
            <div class="row" style="margin-top:20px;">
            </div>
<div class="form-group">
  <label for="comment">ใส้ข้อความ:</label>
  <textarea class="form-control" rows="6" id="message"></textarea>
</div>

            <div class="input-group col-lg-8" style="float:none;">
                <input style="text-align: center;" type="text" class="form-control" placeholder="ID POST " id="id_post" value="" name="id_post">
            </div>
<br>
                <div class="col-lg-5" style="float:none;"><button id="start_botshare" onclick="autoshare();" class="btn btn-success btn-block"><i class="fa fa-share-alt"></i> เริ่มปั้มแชร์</button></div>






        </div>
    </div>
</div>
