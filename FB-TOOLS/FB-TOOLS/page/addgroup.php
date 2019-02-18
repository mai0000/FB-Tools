<div class="page-header">
<h1><i class="fab fa-facebook"></i>&nbsp;Access Token : <?php echo number_format($count["token"]);?> ตัว</h1></div>
<div class="col-lg-7" style="float:none;">
    <div class="panel panel-default">
        <div class="panel-body">
            <div id="status">
            </div>
            <div class="row" style="margin-top:20px;">
            </div>
            <div class="input-group col-lg-8" style="float:none;">
                <input style="text-align: center;" type="text" class="form-control" placeholder="ID Group" id="group" value="" name="group">
            </div>
<br>
                <div class="col-lg-5"><button id="start_joingroup" onclick="joingroup();" class="btn btn-success btn-block"><i class="fa fa-user-plus"></i>&nbsp;เริ่มปั้มคนเข้ากลุ่ม</button></div>
                <div style="margin-top:10px;" class="col-lg-5"><button id="start_friendroup" onclick="friendgroup();" class="btn btn-primary btn-block"><i class="fa fa-user-plus"></i>&nbsp;ดึงเพื่อนเข้ากลุ่ม</button></div>
        </div>
    </div>
</div>
