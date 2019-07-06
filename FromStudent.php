<?php include 'Header.php';
include 'Menu/MenuStudent.php'; ?>
<div class="container">
  <?php
    include 'Connect.php';
    $Number_ID = $_GET['Number_ID'];
    $sql ="SELECT * FROM tb_number WHERE Number_ID = '".$_GET['Number_ID']."' ";
    $query = mysql_query($sql);
    $data = mysql_fetch_array($query);
   ?>
   <div class="text-center">
     <h2>แก่ไขข้อมูลนักศึกษา</h2>
   </div>
  <form action="Update_Student.php?Number_ID=<?php echo $data['Number_ID']?>" method="post">
    <div class="form-group">
      <label>รหัสนักศึกษา</label>
      <input type="number" class="form-control" required  value="<?php echo $data['Number_Code']?>" name="Number_Code">
    </div>
    <div class="form-group">
      <label>ชื่อ</label>
      <input type="text" class="form-control"  value="<?php echo $data['Number_Name']?>" name="Number_Name">
    </div>
    <div class="form-group">
      <label>เบอร์โทรศัพท์</label>
      <input type="number" class="form-control"  value="<?php echo $data['Number_Phone']?>" name="Number_Phone">
    </div>
    <div class="form-group">
      <label>เกรด</label>
      <input type="text" class="form-control"   value="<?php echo $data['Grade']?>" name="Grade">
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" name="Edit"  value="แก่ไข">
    </div>
  </form>
<?php include 'Footer.php'; ?>
