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
 <table class="table"  id="dataTable">
     <thead class="thead-light">
        <tr>
          <th>รหัสนักศึกษา</th>
          <th>ชื่อ</th>
          <th>เบอร์โทร</th>
          <th>แก่ไข/ลบ</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_number  ";
        $query = mysql_query($sql);
        while ($a = mysql_fetch_array($query)) {
         ?>
        <tr>
          <td><?php echo $a['Number_Code']; ?></td>
          <td><?php echo $a['Number_Name']; ?></td>
          <td><?php echo $a['Number_Phone']; ?></td>
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
