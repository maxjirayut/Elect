<?php include 'Header.php';
include 'Menu/MenuAssure.php'; ?>
<div class="container">
  <form action="Add_Assuer.php" method="post">
    <div class="form-group">
      <label >รหัสนักศึกษา</label>
      <input type="number" class="form-control" required  placeholder="รหัสนักศึกษา" name="Number_Code">
    </div>
    <div class="form-group">
      <label >รหัสบัตรประจำตัวประชาชน</label>
      <input type="number" class="form-control" required  placeholder="รหัสบัตรประจำตัวประชาชน" name="Number_User">
    </div>
    <div class="form-group">
      <label>สาขา</label>
      <!-- <input type="text" class="form-control"  required placeholder="คณะ" name="Number_Sub"> -->
     <select name="Number_Sub"  class="form-control">
       <option value="สาขาวิชาเทคโนโลยีสารสนเทศ">สาขาวิชาเทคโนโลยีสารสนเทศ (IT)</option>
       <option value="สาขาวิชาการจัดการเทคโนโลยี">สาขาวิชาการจัดการเทคโนโลยี (TM)</option>
       <option value="สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ">สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ (ITM)</option>
       <option value="สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น">สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น (MTA)</option>
       <option value="สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร">สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร (CTC)</option>
       <option value="สาขาวิชาภูมิสารสนเทศ">สาขาวิชาภูมิสารสนเทศ (GIT)</option>
     </select>
    </div>
    <div class="form-group">
      <label>ชื่อ</label>
      <input type="text" class="form-control" required  placeholder="ชื่อ" name="Number_Name">
    </div>
    <div class="form-group">
      <label>เบอร์โทรศัพท์</label>
      <input type="number" class="form-control" required placeholder="เบอร์โทรศัพท์" name="Number_Phone">
    </div>
    <div class="text-center">
      <input type="submit" onclick="return confirm('คุณต้องการบันทึกข้อมูลหรีอไม่')" class="btn btn-primary"  value="บันทึก">
    </div>
  </form>
</div>
<?php include 'Footer.php'; ?>
