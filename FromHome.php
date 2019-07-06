<?php include 'Header.php';
include 'Menu/MenuHome.php';?>
  <?php
    include 'Connect.php';
    $ST_ID = $_GET['ST_ID'];
    $sql ="SELECT * FROM tb_student WHERE ST_ID = '".$_GET['ST_ID']."' ";
    $query = mysql_query($sql);
    $data = mysql_fetch_array($query);
   ?>
<div class="container">
  <div class="row justify-content-md-center" >
      <img style="max-width:250px;" src="img/<?php echo $data['ST_Img_Grade'];?>">
  </div>
  <br>
  <div class="text-center">
    <h2>จัดการข้อมูลผู้สมัครนายกสโมสร</h2>
  </div>
  <form action="Update_Home.php?ST_ID=<?php echo $data['ST_ID'];?>" method="post">
    <div class="form-group">
    <label>สถาณะ</label>
    <select name="ST_Status"  class="form-control">
      <option value="อนุมัติ">อนุมัติ</option>
      <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
    </select>
    </div>
    <div class="form-group">
      <label >ชื่อ</label>
      <input type="text" class="form-control" required  value="<?php echo $data['ST_Name']; ?>" name="ST_Name">
    </div>
    <div class="form-group">
    <label>สาขา</label>
    <select name="ST_Sub"  class="form-control">
      <option value="<?php echo $data['ST_Sub'];?>"><?php echo $data['ST_Sub'];?></option>
      <option value="สาขาวิชาเทคโนโลยีสารสนเทศ">สาขาวิชาเทคโนโลยีสารสนเทศ (IT)</option>
      <option value="สาขาวิชาการจัดการเทคโนโลยี">สาขาวิชาการจัดการเทคโนโลยี (TM)</option>
      <option value="สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ">สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ (ITM)</option>
      <option value="สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น">สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น (MTA)</option>
      <option value="สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร">สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร (CTC)</option>
      <option value="สาขาวิชาภูมิสารสนเทศ">สาขาวิชาภูมิสารสนเทศ (GIT)</option>
    </select>
    </div>
    <div class="form-group">
      <label>ที่อยู่</label>
      <input type="text" class="form-control" required  value="<?php echo $data['ST_Address'];  ?>" name="ST_Address">
    </div>
    <div class="form-group">
      <label>อีเมล</label>
      <input type="text" class="form-control" required value="<?php echo $data['ST_Email']?>" name="ST_Email">
    </div>
    <div class="form-group">
      <label>เบอร์โทรศัพท์</label>
      <input type="number" class="form-control" required  value="<?php echo $data['ST_Phone'];?>" name="ST_Phone">
    </div>
    <div class="text-center">
      <input type="submit" onclick="return confirm('คุณต้องการแก่ไขข้อมูลหรีอไม่')" class="btn btn-primary" name="Edit_Home" value="แก่ไขข้อมูลผู้สมัคร">
    </div>
  </form>
</div>
<?php include 'Footer.php'; ?>
