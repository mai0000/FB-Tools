    <h1 style="font-size: 40px;">System Facebook-Tools</h1>
<p style="font-size: 18px;"><strong>สำหรับคนที่ไม่มีโทเค่น ลองหาซื้อในกลุ่ม หรือ ลองหาของแจกดูครับ <a href="https://web.facebook.com/groups/274394819887702/" target="_blank">https://www.facebook.com/groups/274394819887702/</a></strong></p>
<p>Token ในระบบมีทั้งหมด <?php echo number_format($count["token"]); ?> Token</p>
<?php
if (isset($_GET['check_token'])) {
echo '<script>itoken("Token Success !!", "เคลียร์ Token เรียบร้อบแล้วว");</script>';
}
?>
    <p><a class="btn btn-danger btn-lg"  onclick="check_token();" href="?page=check_access_token" id="checktoken" role="button">เริ่มเช็ค Access Token ที่ใช้งานไม่ได้</a></p>
