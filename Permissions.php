<?php
include 'Header.php';
include 'Menu/MenuPermissions.php';
include 'Connect.php';

$SQL = "SELECT * FROM tb_status";
$Query = mysql_query($SQL);
$Data = mysql_fetch_array($Query);
 ?>
 <div class="container">
   <div class="text-center">
      <h2>กำหนดสิทธิ์ ปีการศึกษาที่สามารถสมัครลงนายกสโมสร</h2>
   </div>
   <form action="status.php" method="POST">
     <div class="form-group">
       <label>รหัสปี</label>
       <input type="number" class="form-control"  placeholder="รหัสปี" value="<?php echo $Data['status_code']; ?>" name="status_code">
     </div>
     <div class="text-center">
        <button type="submit" class="btn btn-primary">บันทึก</button>
     </div>
   </form>
 </div>
<?php include 'Footer.php'; ?>
