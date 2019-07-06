<?php include 'Header.php';
include 'Menu/Menuindex.php'; ?>
<div class="container">
  <form action="SET_Register.php"  method="post" enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();">
      <div class="form-group">
          <label>รูปประจำตัว</label>
        <div class="custom-file">
           <label class="custom-file-label" for="customFile">เลือกรูปประจำตัว</label>
           <input type="file" class="custom-file-input" required placeholder="เลือกรูปประจำตัว" name="Img_Profile">
        </div>
      </div>
    <div class="form-group">
      <label for="email">รหัสนักศึกษา</label>
      <input type="number" class="form-control" required  placeholder="รหัสนักศึกษา" name="Number_Code">
    </div>
    <div class="form-group">
      <label>สาขา :</label>
    <select name="ST_Sub"  class="form-control">
      <option value="สาขาวิชาเทคโนโลยีสารสนเทศ">สาขาวิชาเทคโนโลยีสารสนเทศ (IT)</option>
      <option value="สาขาวิชาการจัดการเทคโนโลยี">สาขาวิชาการจัดการเทคโนโลยี (TM)</option>
      <option value="สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ">สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ (ITM)</option>
      <option value="สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น">สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น (MTA)</option>
      <option value="สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร">สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร (CTC)</option>
      <option value="สาขาวิชาภูมิสารสนเทศ">สาขาวิชาภูมิสารสนเทศ (GIT)</option>
    </select>
    </div>
    <div class="form-group">
      <label for="email">ชื่อ :</label>
      <input type="text" class="form-control" required  placeholder="ชื่อ" name="ST_Name">
    </div>
    <div class="form-group">
      <label for="email">เกรด :</label>
      <input type="number" class="form-control" required  placeholder="เกรด" name="ST_Grede">
    </div>
    <div class="form-group">
      <label>เอกสารยืนยันเกรด :</label>
      <div class="custom-file">
         <input type="file" class="custom-file-input" required placeholder="เลือกเอกสารยืนยันเกรด" name="Img_Grade">
         <label class="custom-file-label" for="customFile">เลือกเอกสารยืนยันเกรด</label>
      </div>
    </div>
    <div class="form-group">
      <label for="email">ที่อยู่ :</label>
      <textarea class="form-control" placeholder="ที่อยู่" name="ST_Address"></textarea>
    </div>
    <div class="form-group">
      <label for="email">อีเมล:</label>
      <input type="text" class="form-control" required placeholder="อีเมล" name="ST_Email">
    </div>
    <div class="form-group">
      <label for="pwd">เบอร์โทรศัพท์ :</label>
      <input type="text" class="form-control" required placeholder="เบอร์โทรศัพท์" name="ST_Phone">
    </div>
    <div class="form-group">
      <label for="pwd">นโยบาย :</label>
      <textarea class="form-control" placeholder="นโยบาย" name="ST_Policy"></textarea>
    </div>
    <div class="text-center">
      <input type="submit" onclick="return confirm('คุณต้องการบันทึกข้อมูลหรีอไม่')" class="btn btn-primary"  value="บันทึก">
    </div>
  </form>
</div>
<br><br>
<?php include 'Footer.php'; ?>
