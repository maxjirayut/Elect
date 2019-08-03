<?php
include 'Header.php';
include 'Menu/MenuStudent.php';
include 'Connect.php';?>
<div class="container-fluid">
  <div class="text-center">
    <a href="FromInserNumber.php">
      <button type="button" class="btn btn-primary" name="button">เพิ่มชื่อนักศึกษา</button>
    </a>
  </div>
</div>
<div class="text-center">
    <div>
      <form  action="Student.php" method="post">
        <div class="row justify-content-center">
          <div class="col-4">
            <div class="row">
              <label>สาขา </label>
            <select name="ST_Sub"  class="form-control">
              <option value=""></option>
              <option value="สาขาวิชาเทคโนโลยีสารสนเทศ">สาขาวิชาเทคโนโลยีสารสนเทศ</option>
              <option value="สาขาวิชาการจัดการเทคโนโลยี">สาขาวิชาการจัดการเทคโนโลยี</option>
              <option value="สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ">สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ</option>
              <option value="สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น">สาขาวิชาเทคโนโลยีมัลติมีเดียและเเอนิเมชั่น </option>
              <option value="สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร">สาขาวิชาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร </option>
              <option value="สาขาวิชาภูมิสารสนเทศ">สาขาวิชาภูมิสารสนเทศ </option>
            </select>
            </div>
          </div>
          <div class="col-1">
            <div class="row">
          <label>ปี</label>
          <select name="Year"  class="form-control">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
          </div>
          </div>
          <div class="col-1">
          <div class="row">
            <label>ห้อง</label>
            <select name="Room"  class="form-control">
              <option value=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          </div>
        </div>
        <br>
        <input class="btn btn-light" type="submit" value="ค้าหา">
      </form>
    </div>
</div>
 <table class="table"  id="dataTable">
     <thead class="thead-light">
        <tr>
          <th>รหัสนักศึกษา</th>
          <th>บัตรประจำตัวประชาชน</th>
          <th>ชื่อ</th>
          <th>เบอร์โทร</th>
          <th>ปีการศึกษา</th>
          <th>ห้อง</th>
          <th>แก่ไข/ลบ</th>
        </tr>
      </thead>
      <tbody>
        <?php
        error_reporting(~E_NOTICE);
          $Sub = $_POST["ST_Sub"] ;
          $Year = $_POST["Year"] ;
          $Room = $_POST["Room"] ;

    if ($Sub == null && $Year == NULL && $Room == null) {
      $row = 1;
      $sql = "SELECT * FROM tb_number ";
    } elseif ($Year == null && $Sub != null && $Room == null) {
      $row = 1;
      $sql = "SELECT * FROM tb_number N INNER JOIN Year Y ON N.Year = Y.Year WHERE N.Number_Sub = '$Sub' ";
    } else if($Year != null && $Sub != null && $Room == null) {
      $row = 1;
      $sql = "SELECT * FROM tb_number N INNER JOIN Year Y ON N.Year = Y.Year WHERE N.Number_Sub = '$Sub' AND Y.YearCode = $Year ";
    }elseif ($Year != null && $Sub == null && $Room == null) {
      $row = 1;
      $sql = "SELECT * FROM tb_number N INNER JOIN Year Y ON N.Year = Y.Year WHERE  Y.YearCode = $Year ";
    }elseif ($Year != null && $Sub != null && $Room != null) {
      $row = 1;
      $sql = "SELECT * FROM tb_number N INNER JOIN Year Y ON N.Year = Y.Year WHERE N.Number_Sub = '$Sub' AND Y.YearCode = $Year AND N.room = $Room ";
    }elseif ($Year == null && $Sub == null && $Room != null) {
      $row = 1;
      echo "<script>alert('กรุณากรอกข้อมูลให้ครบ')</script>";
      $sql = "SELECT * FROM tb_number  ";
    }
        $query = mysql_query($sql);
        while ($a = mysql_fetch_array($query)) {
         ?>
        <tr>
          <td><?php echo $a['Number_Code']; ?></td>
          <td><?php echo $a['Number_User']; ?></td>
          <td><?php echo $a['Number_Name']; ?></td>
          <td><?php echo $a['Number_Phone']; ?></td>
          <td><?php echo $a['Year']; ?></td>
          <td><?php echo $a['room']; ?></td>
          <td width="15%" >
            <div class="text-center">
              <a href="FromStudent.php?Number_ID=<?php echo $a['Number_ID']; ?>">
                <button type="button" class="btn btn-warning" name="button">แก่ไข</button>
              </a>
              <a href="JavaScript:if(confirm('ยืนยันการลบ') == true){window
                  .location='Delete_Student.php?Number_ID=<?php echo $a["Number_ID"];?>';}">
                <button type="button" class="btn btn-danger" name="button">ลบ</button>
              </a>
            </div>
          </td>
        </tr>
          <?php } ?>
      </tbody>
  </table>
<?php include 'Footer.php'; ?>
