<?php include 'header.php';
include 'Menu/MenuStudent.php'; ?>
<div class="container">
  <div class="text-center">
      <h2>เพื่มข้อมูลนักศึกษา</h2>
  </div>
  <form action="Add_Student.php" method="post">
    <div class="form-group">
      <label>รหัสนักศึกษา</label>
      <input type="number" class="form-control" required   name="Number_Code">
    </div>
    <div class="form-group">
      <label>หมายเลขบัติบัตรประจำตัวประชาชน</label>
      <input type="number" class="form-control" required   name="Number_User">
    </div>
    <div class="form-group">
      <label>ชื่อ</label>
      <input type="text" class="form-control" name="Number_Name">
    </div>
    <div class="form-group">
      <label>เบอร์โทรศัพท์</label>
      <input type="number" class="form-control" name="Number_Phone">
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col">
          <label>ปี</label>
          <input type="number" class="form-control"  name="Year">
        </div>
        <div class="col">
          <label>ห้อง</label>
          <input type="number" class="form-control" name="room">
        </div>
      </div>
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" name="Edit"  value="บันทึก">
    </div>
  </form>
</div>
<?php include 'Footer.php'; ?>
